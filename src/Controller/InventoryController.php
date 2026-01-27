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

    // --- LÓGICA DE LOGIN (OPENID MANUAL) ---

    #[Route('/auth/steam', name: 'auth_steam')]
    public function login(): Response
    {
        $logFile = $this->getParameter('kernel.project_dir') . '/var/steam_debug.log';
        file_put_contents($logFile, "Steam LOGIN init at " . date('Y-m-d H:i:s') . "\n", FILE_APPEND);

        $returnTo = $this->generateUrl('auth_steam_check', [], 0);
        $realm = $this->generateUrl('app_inventory', [], 0);

        file_put_contents($logFile, "ReturnTo: $returnTo\nRealm: $realm\n", FILE_APPEND);

        $params = [
            'openid.ns' => 'http://specs.openid.net/auth/2.0',
            'openid.mode' => 'checkid_setup',
            'openid.return_to' => $returnTo,
            'openid.realm' => $realm,
            'openid.identity' => 'http://specs.openid.net/auth/2.0/identifier_select',
            'openid.claimed_id' => 'http://specs.openid.net/auth/2.0/identifier_select',
        ];

        $url = 'https://steamcommunity.com/openid/login?' . http_build_query($params);
        file_put_contents($logFile, "Redirecting to: $url\n", FILE_APPEND);

        return $this->redirect($url);
    }

    #[Route('/auth/steam/check', name: 'auth_steam_check')]
    public function check(Request $request, SessionInterface $session): Response
    {
        $logFile = $this->getParameter('kernel.project_dir') . '/var/steam_debug.log';
        file_put_contents($logFile, "Steam check started at " . date('Y-m-d H:i:s') . "\n", FILE_APPEND);

        $this->logger->info('Steam check started', ['params' => $request->query->all()]);

        $params = $request->query->all();
        if (empty($params)) {
            file_put_contents($logFile, "Error: No params\n", FILE_APPEND);
            $this->logger->error('Steam check failed: No params');
            return $this->redirectToRoute('app_inventory');
        }

        $params['openid.mode'] = 'check_authentication';

        try {
            file_put_contents($logFile, "Sending request to Steam...\n", FILE_APPEND);
            $response = $this->client->request('POST', 'https://steamcommunity.com/openid/login', [
                'body' => $params
            ]);

            $content = $response->getContent();
            file_put_contents($logFile, "Steam response: " . substr($content, 0, 100) . "...\n", FILE_APPEND);
            $this->logger->info('Steam OpenID response', ['content' => $content]);

            if (str_contains($content, 'is_valid:true')) {
                preg_match('#^https://steamcommunity.com/openid/id/([0-9]{17,25})#', $params['openid_claimed_id'], $matches);
                $steamId = $matches[1];
                file_put_contents($logFile, "SteamID verified: $steamId\n", FILE_APPEND);
                $this->logger->info('SteamID extracted', ['steamId' => $steamId]);

                // Obtener datos del perfil (Nombre y Avatar)
                $userUrl = "https://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=" . $this->steamApiKey . "&steamids=" . $steamId;
                $userRes = $this->client->request('GET', $userUrl);
                $userData = $userRes->toArray();

                $personaName = $userData['response']['players'][0]['personaname'] ?? 'Usuario de Steam';
                $avatarUrl = $userData['response']['players'][0]['avatarfull'] ?? null;

                $this->logger->info('Steam User Data', ['name' => $personaName, 'avatar' => $avatarUrl]);

                // --- REGISTRO / ACTUALIZACIÓN DE USUARIO ---
                $user = $this->userRepository->findOneBy(['steamId' => $steamId]);

                if (!$user) {
                    file_put_contents($logFile, "Creating NEW User\n", FILE_APPEND);
                    $this->logger->info('Creating new user for steamId', ['steamId' => $steamId]);
                    $user = new User();
                    $user->setSteamId($steamId);
                    $user->setRoles(['ROLE_USER']);
                } else {
                    file_put_contents($logFile, "Found EXISTING User ID: " . $user->getId() . "\n", FILE_APPEND);
                    $this->logger->info('Updating existing user', ['id' => $user->getId()]);
                }

                // Actualizamos datos siempre
                $user->setSteamAvatar($avatarUrl);
                // NOTA: Si quisieras guardar el nombre, deberías añadir la propiedad en User.php y hacerlo aquí.
                // $user->setName($personaName);

                $this->entityManager->persist($user);
                $this->entityManager->flush();
                file_put_contents($logFile, "User flushed to DB\n", FILE_APPEND);
                $this->logger->info('User persisted/updated');
                // -------------------------------------------

                // Store persona in session for display purposes if not in DB
                $session->set('steam_persona', $personaName);

                // MANUALLY LOG THE USER IN USING SYMFONY SECURITY
                $this->logger->info('Authenticating user manually via UserAuthenticatorInterface');
                file_put_contents($logFile, "Attempting UserAuthenticatorInterface->authenticateUser...\n", FILE_APPEND);

                $response = $this->userAuthenticator->authenticateUser(
                    $user,
                    $this->authenticator,
                    $request
                );

                file_put_contents($logFile, "Authentication successful (returned Response)\n", FILE_APPEND);
                return $response;

            } else {
                file_put_contents($logFile, "INVALID Steam response\n", FILE_APPEND);
                $this->logger->error('Steam OpenID validation failed (is_valid:false)');
            }
        } catch (\Exception $e) {
            file_put_contents($logFile, "EXCEPTION: " . $e->getMessage() . "\n" . $e->getTraceAsString() . "\n", FILE_APPEND);
            $this->logger->critical('Exception during Steam auth', ['error' => $e->getMessage(), 'trace' => $e->getTraceAsString()]);
            $this->addFlash('error', 'Error en la autenticación con Steam.');
        }

        return $this->redirectToRoute('app_inventory');
    }

    #[Route('/auth/logout', name: 'auth_logout')]
    public function logout(SessionInterface $session): Response
    {
        // logic is handled by security.yaml but we can keep this for explicit logout if needed
        // usually this route should be interceptable by firewall logout

        $session->remove('steam_id');
        $session->remove('steam_persona');
        // This line is often unreachable if firewall logout intercepts '/auth/logout' 
        // Ensure security.yaml has logout path set to this if you want to use it
        // Or better, just redirect to standard logout
        return $this->redirectToRoute('app_logout');
    }
}