<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Contracts\Cache\CacheInterface;
use Symfony\Contracts\Cache\ItemInterface;

class InventoryController extends AbstractController
{
    private $client;
    private string $steamApiKey;
    private UserRepository $userRepository;
    private EntityManagerInterface $entityManager;

    public function __construct(
        HttpClientInterface $client,
        string $steamApiKey,
        UserRepository $userRepository,
        EntityManagerInterface $entityManager
    ) {
        $this->client = $client;
        $this->steamApiKey = $steamApiKey;
        $this->userRepository = $userRepository;
        $this->entityManager = $entityManager;
    }

    #[Route('/inventario', name: 'app_inventory')]
    public function index(SessionInterface $session, CacheInterface $cache): Response
    {
        $steamId = $session->get('steam_id');
        $steamPersona = $session->get('steam_persona', 'Invitado');

        if (!$steamId) {
            return $this->render('inventory/login.html.twig', [
                'items' => [],
                'steamUser' => 'Invitado'
            ]);
        }

        $prices = $cache->get('csgo_prices_list', function (ItemInterface $item) {
            $item->expiresAfter(3600);
            try {
                $response = $this->client->request('GET', 'https://csgobackpack.net/api/GetItemsList/v2/');
                $data = $response->toArray();
                return $data['items_list'] ?? [];
            } catch (\Exception $e) {
                return [];
            }
        });

        // 1. Obtener datos PÚBLICOS (imágenes, nombres market, etc.)
        $publicData = [];
        try {
            // AppID 730 = CS2, ContextID 2 = Skins
            $inventoryUrl = "https://steamcommunity.com/inventory/{$steamId}/730/2?l=spanish&count=1000";
            $response = $this->client->request('GET', $inventoryUrl);
            $publicData = $response->toArray();
        } catch (\Exception $e) {
            $this->addFlash('error', 'No se pudo cargar el inventario público. ¿Es tu perfil público?');
        }

        // 2. Obtener datos AUTHENTICADOS (float, pattern, etc.)
        $authDataMap = [];
        try {
            $authUrl = "https://api.steampowered.com/IEconItems_730/GetPlayerItems/v1/?key={$this->steamApiKey}&steamid={$steamId}";
            $authResponse = $this->client->request('GET', $authUrl);
            $authContent = $authResponse->toArray();

            if (isset($authContent['result']['items'])) {
                foreach ($authContent['result']['items'] as $item) {
                    $assetId = $item['id'];
                    $float = null;
                    $pattern = null;

                    if (isset($item['attributes'])) {
                        foreach ($item['attributes'] as $attr) {
                            // DefIndex 8 = Paint Wear (Float)
                            if ($attr['defindex'] == 8 && isset($attr['float_value'])) {
                                $float = $attr['float_value'];
                            }
                            // DefIndex 7 = Paint Seed (Pattern)
                            if ($attr['defindex'] == 7 && isset($attr['value'])) {
                                $pattern = (int) $attr['value'];
                            }
                        }
                    }

                    $authDataMap[$assetId] = [
                        'float' => $float,
                        'pattern' => $pattern
                    ];
                }
            }
        } catch (\Exception $e) {
            // Si falla la API auth (ej. API Key mal) seguimos solo con datos públicos
        }

        // 3. COMBINAR DATOS
        $userItems = [];
        if (isset($publicData['assets']) && isset($publicData['descriptions'])) {
            foreach ($publicData['assets'] as $asset) {
                // Buscamos la descripción que coincide con el classid del item
                $descIndex = array_search($asset['classid'], array_column($publicData['descriptions'], 'classid'));

                if ($descIndex !== false) {
                    $desc = $publicData['descriptions'][$descIndex];
                    $marketName = $desc['market_name'];

                    // Lógica de precio
                    $price = 0;
                    if (isset($prices[$marketName]['price']['7_days']['average'])) {
                        $price = (float) $prices[$marketName]['price']['7_days']['average'];
                    }

                    // Datos Auth (Float/Pattern)
                    $extraData = $authDataMap[$asset['assetid']] ?? ['float' => null, 'pattern' => null];

                    $userItems[] = [
                        'id' => $asset['assetid'],
                        'name' => $marketName,
                        'image' => "https://community.cloudflare.steamstatic.com/economy/image/" . ($desc['icon_url_large'] ?? $desc['icon_url']),
                        'price' => $price,
                        'float' => $extraData['float'],
                        'pattern' => $extraData['pattern']
                    ];
                }
            }
        }

        // Renderizado final con todas las variables que Twig espera
        return $this->render('inventory/index.html.twig', [
            'items' => $userItems,
            'steamUser' => $steamPersona
        ]);
    }

    // --- AUTENTICACIÓN STEAM (OPENID) ---

    #[Route('/auth/steam', name: 'auth_steam')]
    public function login(): Response
    {
        $params = [
            'openid.ns' => 'http://specs.openid.net/auth/2.0',
            'openid.mode' => 'checkid_setup',
            'openid.return_to' => $this->generateUrl('auth_steam_check', [], 0),
            'openid.realm' => $this->generateUrl('app_inventory', [], 0),
            'openid.identity' => 'http://specs.openid.net/auth/2.0/identifier_select',
            'openid.claimed_id' => 'http://specs.openid.net/auth/2.0/identifier_select',
        ];

        return $this->redirect('https://steamcommunity.com/openid/login?' . http_build_query($params));
    }

    #[Route('/auth/steam/check', name: 'auth_steam_check')]
    public function check(Request $request, SessionInterface $session): Response
    {
        $params = $request->query->all();
        if (empty($params))
            return $this->redirectToRoute('app_inventory');

        $params['openid.mode'] = 'check_authentication';

        try {
            $response = $this->client->request('POST', 'https://steamcommunity.com/openid/login', [
                'body' => $params
            ]);

            if (str_contains($response->getContent(), 'is_valid:true')) {
                preg_match('#^https://steamcommunity.com/openid/id/([0-9]{17,25})#', $params['openid_claimed_id'], $matches);
                $steamId = $matches[1];

                // Obtener datos del perfil (Nombre y Avatar)
                $userUrl = "https://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=" . $this->steamApiKey . "&steamids=" . $steamId;
                $userRes = $this->client->request('GET', $userUrl);
                $userData = $userRes->toArray();

                $personaName = $userData['response']['players'][0]['personaname'] ?? 'Usuario de Steam';
                $avatarUrl = $userData['response']['players'][0]['avatarfull'] ?? null;

                // --- REGISTRO / ACTUALIZACIÓN DE USUARIO ---
                $user = $this->userRepository->findOneBy(['steamId' => $steamId]);

                if (!$user) {
                    $user = new User();
                    $user->setSteamId($steamId);
                    $user->setRoles(['ROLE_USER']);
                }

                // Actualizamos datos siempre (por si cambió el avatar o nombre, aunque nombre no lo guardamos en DB de momento)
                $user->setSteamAvatar($avatarUrl);

                $this->entityManager->persist($user);
                $this->entityManager->flush();
                // -------------------------------------------

                $session->set('steam_id', $steamId);
                $session->set('steam_persona', $personaName);

                return $this->redirectToRoute('app_inventory');
            }
        } catch (\Exception $e) {
            $this->addFlash('error', 'Error en la autenticación con Steam.');
        }

        return $this->redirectToRoute('app_inventory');
    }

    #[Route('/auth/logout', name: 'auth_logout')]
    public function logout(SessionInterface $session): Response
    {
        $session->remove('steam_id');
        $session->remove('steam_persona');
        return $this->redirectToRoute('app_inventory');
    }
}