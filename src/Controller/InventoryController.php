<?php

namespace App\Controller;

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
    // ¡IMPORTANTE! Consigue tu API KEY aquí: https://steamcommunity.com/dev/apikey
    private const STEAM_API_KEY = 'TU_STEAM_API_KEY_AQUI'; 

    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
    }

    #[Route('/inventario', name: 'app_inventory')]
    public function index(SessionInterface $session, CacheInterface $cache): Response
    {
        // 1. Verificar si ya tenemos el SteamID en sesión
        $steamId = $session->get('steam_id');

        if (!$steamId) {
            return $this->render('inventory/login.html.twig');
        }

        // 2. Obtener Lista de Precios (Cacheada por 1 hora para no saturar)
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

        // 3. Obtener Inventario del Usuario
        $inventoryUrl = "https://steamcommunity.com/inventory/{$steamId}/730/2?l=spanish&count=1000";
        $userItems = [];

        try {
            $response = $this->client->request('GET', $inventoryUrl);
            $data = $response->toArray();

            if (isset($data['assets']) && isset($data['descriptions'])) {
                foreach ($data['assets'] as $asset) {
                    // Buscar la descripción del item
                    $descKey = array_search($asset['classid'], array_column($data['descriptions'], 'classid'));
                    $desc = $data['descriptions'][$descKey];
                    
                    $marketName = $desc['market_name'];
                    
                    // Buscar precio
                    $price = 0;
                    if (isset($prices[$marketName]['price']['7_days']['average'])) {
                        $price = (float) $prices[$marketName]['price']['7_days']['average'];
                    }

                    $userItems[] = [
                        'id' => $asset['assetid'],
                        'name' => $marketName,
                        'image' => "https://community.cloudflare.steamstatic.com/economy/image/" . $desc['icon_url'],
                        'price' => $price
                    ];
                }
            }
        } catch (\Exception $e) {
            $this->addFlash('error', 'Error al cargar el inventario. Asegúrate de que tu perfil es PÚBLICO.');
        }

        // src/Controller/InventoryController.php

        return $this->render('inventory/index.html.twig', [
            'items' => $userItems,
            
            'steamUser' => $session->get('steam_persona', 'Invitado') 
        ]);
    }


    #[Route('/auth/steam', name: 'auth_steam')]
    public function login(): Response
    {
        $params = [
            'openid.ns' => 'http://specs.openid.net/auth/2.0',
            'openid.mode' => 'checkid_setup',
            'openid.return_to' => $this->generateUrl('auth_steam_check', [], 0), // URL absoluta
            'openid.realm' => $this->generateUrl('app_inventory', [], 0), // URL base
            'openid.identity' => 'http://specs.openid.net/auth/2.0/identifier_select',
            'openid.claimed_id' => 'http://specs.openid.net/auth/2.0/identifier_select',
        ];

        return $this->redirect('https://steamcommunity.com/openid/login?' . http_build_query($params));
    }

    #[Route('/auth/steam/check', name: 'auth_steam_check')]
    public function check(Request $request, SessionInterface $session): Response
    {
        // Validar respuesta de Steam
        $params = $request->query->all();
        $params['openid.mode'] = 'check_authentication';

        $response = $this->client->request('POST', 'https://steamcommunity.com/openid/login', [
            'body' => $params
        ]);

        if (strpos($response->getContent(), 'is_valid:true') !== false) {
            // Extraer SteamID de la URL (formato: https://steamcommunity.com/openid/id/76561198000000000)
            preg_match('#^https://steamcommunity.com/openid/id/([0-9]{17,25})#', $params['openid_claimed_id'], $matches);
            $steamId = $matches[1];

            // (Opcional) Obtener nombre de usuario real usando la API Key
            $userUrl = "https://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=" . self::STEAM_API_KEY . "&steamids=" . $steamId;
            $userRes = $this->client->request('GET', $userUrl);
            $userData = $userRes->toArray();
            
            $session->set('steam_id', $steamId);
            $session->set('steam_persona', $userData['response']['players'][0]['personaname'] ?? 'Jugador');

            return $this->redirectToRoute('app_inventory');
        }

        return $this->redirectToRoute('app_inventory');
    }
    
    #[Route('/auth/logout', name: 'auth_logout')]
    public function logout(SessionInterface $session): Response 
    {
        $session->remove('steam_id');
        return $this->redirectToRoute('app_inventory');
    }
}