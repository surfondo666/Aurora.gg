<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WorkshopController extends AbstractController
{
    #[Route('/workshop', name: 'app_workshop')]
    public function index(): Response
    {
        // Aquí definimos los mapas manualmente (simulando una base de datos)
        // Puedes añadir más copiando y pegando los bloques.
        $maps = [
            // --- AIM TRAINING ---
            [
                'title' => 'Aim Botz - Training (CS2)',
                'category' => 'AIM TRAINING',
                'author' => 'uLLeticaL',
                'image' => 'https://steamuserimages-a.akamaihd.net/ugc/2118439373977806540/F518E1E281859D3D097A6F6D2697D6E9A9C96720/?imw=637&imh=358&ima=fit&impolicy=Letterbox&imcolor=%23000000&letterbox=true',
                'desc' => 'El mapa de entrenamiento más famoso de la historia. Botz estáticos y en movimiento, configuración de armas y desafíos.',
                'link' => 'https://steamcommunity.com/sharedfiles/filedetails/?id=3070244462', // Link real
                'tags' => ['Aim', 'Singleplayer', 'Classic']
            ],
            [
                'title' => 'CS2HUB - Training Map',
                'category' => 'AIM TRAINING',
                'author' => 'CS2HUB',
                'image' => 'https://steamuserimages-a.akamaihd.net/ugc/2009222926366697669/840B4425785050C338B7C752B245645A4F39930D/?imw=637&imh=358&ima=fit&impolicy=Letterbox&imcolor=%23000000&letterbox=true',
                'desc' => 'Mapa todo en uno: Spray control, aim botz, prefire y movimiento. Muy completo.',
                'link' => 'https://steamcommunity.com/sharedfiles/filedetails/?id=3070757993',
                'tags' => ['Utility', 'Spray', 'Warmup']
            ],
            
            // --- 1v1 ---
            [
                'title' => 'Multi 1v1 Arena (AM_)',
                'category' => '1 VS 1',
                'author' => 'Orel',
                'image' => 'https://steamuserimages-a.akamaihd.net/ugc/2120690364807908779/5D997424F881273932F7311C2833F8C5E57F5A47/?imw=637&imh=358&ima=fit&impolicy=Letterbox&imcolor=%23000000&letterbox=true',
                'desc' => 'Arenas clásicas para duelear con amigos o servidores comunitarios. AK-47, M4 y AWP.',
                'link' => 'https://steamcommunity.com/sharedfiles/filedetails/?id=3070362263',
                'tags' => ['Multiplayer', 'Arena', 'Duel']
            ],
            [
                'title' => 'Aim Map 1v1 (Classic)',
                'category' => '1 VS 1',
                'author' => 'Generic',
                'image' => 'https://steamuserimages-a.akamaihd.net/ugc/2020478647043003075/F0606D7C7A28F601A3961F17A942E28C84711D23/?imw=637&imh=358&ima=fit&impolicy=Letterbox&imcolor=%23000000&letterbox=true',
                'desc' => 'El mapa naranja clásico de CS:GO portado a CS2 con mejor iluminación.',
                'link' => 'https://steamcommunity.com/workshop/browse/?appid=730&searchtext=1v1+aim_map',
                'tags' => ['Classic', 'Sniper', 'Rifle']
            ],

            // --- SURF & BHOP ---
            [
                'title' => 'Surf Utopia (CS2 Port)',
                'category' => 'SURF',
                'author' => 'SneaK',
                'image' => 'https://steamuserimages-a.akamaihd.net/ugc/2056508933220790932/79040F81E739958348F3735163353526E6C54A48/?imw=637&imh=358&ima=fit&impolicy=Letterbox&imcolor=%23000000&letterbox=true',
                'desc' => 'El mapa de surf más relajante y popular. Ideal para principiantes y veteranos.',
                'link' => 'https://steamcommunity.com/sharedfiles/filedetails/?id=3070522105',
                'tags' => ['Surf', 'Relax', 'Movement']
            ],
            [
                'title' => 'Bhop_Sakura',
                'category' => 'BHOP',
                'author' => 'Sam',
                'image' => 'https://steamuserimages-a.akamaihd.net/ugc/2263684043909191060/0B003362A15E9F80E53B755298816D325E54D7E2/?imw=637&imh=358&ima=fit&impolicy=Letterbox&imcolor=%23000000&letterbox=true',
                'desc' => 'Mapa de BunnyHop estéticamente precioso con temática japonesa.',
                'link' => 'https://steamcommunity.com/sharedfiles/filedetails/?id=3075676348',
                'tags' => ['Bhop', 'Hard', 'Anime']
            ],

            // --- UTILITY ---
            [
                'title' => 'Mirage Instant Smokes',
                'category' => 'UTILITY',
                'author' => 'Dolnma',
                'image' => 'https://steamuserimages-a.akamaihd.net/ugc/2012598306354605929/2A925528807C2867F7E66497793441B5C6207011/?imw=637&imh=358&ima=fit&impolicy=Letterbox&imcolor=%23000000&letterbox=true',
                'desc' => 'Aprende todos los humos, flashes y molos de Mirage sin tiempos de espera.',
                'link' => 'https://steamcommunity.com/sharedfiles/filedetails/?id=3073666943',
                'tags' => ['Nades', 'Tactical', 'Competitive']
            ],
        ];

        return $this->render('workshop/index.html.twig', [
            'maps' => $maps,
        ]);
    }
}