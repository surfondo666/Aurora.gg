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
    
    // IMPORTANTE: Pon tu clave aquí
    private const STEAM_API_KEY = 'TU_STEAM_API_KEY_AQUI'; 

    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
    }

    #[Route('/inventario', name: 'app_inventory')]
    public function index(SessionInterface $session, CacheInterface $cache): Response
    {
        // 1. Verificar si hay sesión de Steam
        $steamId = $session->get('steam_id');
        $steamPersona = $session->get('steam_persona', 'Invitado');

        // Si no está logueado, enviamos a la vista de login con las variables inicializadas
        if (!$steamId) {
            return $this->render('inventory/login.html.twig', [
                'items' => [],
                'steamUser' => 'Invitado'
            ]);
        }

        // 2. Obtener Lista de Precios (Cacheada 1 hora)
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

        // 3. Obtener Inventario
        $userItems = [];
        try {
            // AppID 730 = CS2, ContextID 2 = Skins
            $inventoryUrl = "https://steamcommunity.com/inventory/{$steamId}/730/2?l=spanish&count=1000";
            $response = $this->client->request('GET', $inventoryUrl);
            $data = $response->toArray();

            if (isset($data['assets']) && isset($data['descriptions'])) {
                foreach ($data['assets'] as $asset) {
                    // Buscamos la descripción que coincide con el classid del item
                    $descIndex = array_search($asset['classid'], array_column($data['descriptions'], 'classid'));
                    
                    if ($descIndex !== false) {
                        $desc = $data['descriptions'][$descIndex];
                        $marketName = $desc['market_name'];
                        
                        // Lógica de precio
                        $price = 0;
                        if (isset($prices[$marketName]['price']['7_days']['average'])) {
                            $price = (float) $prices[$marketName]['price']['7_days']['average'];
                        }

                        $userItems[] = [
                            'id' => $asset['assetid'],
                            'name' => $marketName,
                            'image' => "https://community.cloudflare.steamstatic.com/economy/image/" . ($desc['icon_url_large'] ?? $desc['icon_url']),
                            'price' => $price
                        ];
                    }
                }
            }
        } catch (\Exception $e) {
            $this->addFlash('error', 'No se pudo cargar el inventario. ¿Es tu perfil público?');
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
        if (empty($params)) return $this->redirectToRoute('app_inventory');

        $params['openid.mode'] = 'check_authentication';

        try {
            $response = $this->client->request('POST', 'https://steamcommunity.com/openid/login', [
                'body' => $params
            ]);

            if (str_contains($response->getContent(), 'is_valid:true')) {
                preg_match('#^https://steamcommunity.com/openid/id/([0-9]{17,25})#', $params['openid_claimed_id'], $matches);
                $steamId = $matches[1];

                // Obtener datos del perfil (Nombre y Avatar)
                $userUrl = "https://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=" . self::STEAM_API_KEY . "&steamids=" . $steamId;
                $userRes = $this->client->request('GET', $userUrl);
                $userData = $userRes->toArray();
                
                $personaName = $userData['response']['players'][0]['personaname'] ?? 'Usuario de Steam';
                
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