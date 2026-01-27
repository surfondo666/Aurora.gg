<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use App\Security\AppAuthenticator;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\UserAuthenticatorInterface;
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
    private LoggerInterface $logger;
    private UserAuthenticatorInterface $userAuthenticator;
    private AppAuthenticator $authenticator;

    public function __construct(
        HttpClientInterface $client,
        string $steamApiKey,
        UserRepository $userRepository,
        EntityManagerInterface $entityManager,
        LoggerInterface $logger,
        UserAuthenticatorInterface $userAuthenticator,
        AppAuthenticator $authenticator
    ) {
        $this->client = $client;
        $this->steamApiKey = $steamApiKey;
        $this->userRepository = $userRepository;
        $this->entityManager = $entityManager;
        $this->logger = $logger;
        $this->userAuthenticator = $userAuthenticator;
        $this->authenticator = $authenticator;
    }

    #[Route('/inventario', name: 'app_inventory')]
    public function index(SessionInterface $session, CacheInterface $cache): Response
    {
        // Use Symfony Security User if available, fallback to session for backward compatibility during transition
        $user = $this->getUser();
        $steamId = null;
        $steamPersona = 'Invitado';

        if ($user instanceof User && $user->getSteamId()) {
            $steamId = $user->getSteamId();
            // We could store persona in DB too, but for now let's keep logic simple or fetch it
            // If we don't have persona in DB, we default to something or session
            $steamPersona = $session->get('steam_persona', 'Usuario');
        } elseif ($session->has('steam_id')) {
            // Fallback to old session way if user is somehow logged in via old way but not new way (shouldn't happen after fix)
            $steamId = $session->get('steam_id');
            $steamPersona = $session->get('steam_persona', 'Invitado');
        }

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


}