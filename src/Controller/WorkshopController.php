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
                'image' => 'img/workshop/AIMBOTZ.jpeg',
                'desc' => 'El mapa de entrenamiento más famoso de la historia. Botz estáticos y en movimiento, configuración de armas y desafíos.',
                'link' => 'https://steamcommunity.com/sharedfiles/filedetails/?id=3070244462', // Link real
                'tags' => ['Aim', 'Singleplayer', 'Classic']
            ],
            [
                'title' => 'CS2HUB - Training Map',
                'category' => 'AIM TRAINING',
                'author' => 'CS2HUB',
                'image' => 'img/workshop/CS2HUB.jpeg',
                'desc' => 'Mapa todo en uno: Spray control, aim botz, prefire y movimiento. Muy completo.',
                'link' => 'https://steamcommunity.com/sharedfiles/filedetails/?id=3070757993',
                'tags' => ['Utility', 'Spray', 'Warmup']
            ],
            
            // --- 1v1 ---
            [
                'title' => 'Multi 1v1 Arena (AM_)',
                'category' => '1 VS 1',
                'author' => 'Orel',
                'image' => 'img/workshop/MULTI1v1.jpeg',
                'desc' => 'Arenas clásicas para duelear con amigos o servidores comunitarios. AK-47, M4 y AWP.',
                'link' => 'https://steamcommunity.com/sharedfiles/filedetails/?id=3070362263',
                'tags' => ['Multiplayer', 'Arena', 'Duel']
            ],
            [
                'title' => 'Aim Map 1v1 (Classic)',
                'category' => '1 VS 1',
                'author' => 'Generic',
                'image' => 'img/workshop/1v1MAP.jpeg',
                'desc' => 'El mapa naranja clásico de CS:GO portado a CS2 con mejor iluminación.',
                'link' => 'https://steamcommunity.com/workshop/browse/?appid=730&searchtext=1v1+aim_map',
                'tags' => ['Classic', 'Sniper', 'Rifle']
            ],

            // --- SURF & BHOP ---
            [
                'title' => 'Surf Utopia (CS2 Port)',
                'category' => 'SURF',
                'author' => 'SneaK',
                'image' => 'img/workshop/surf_utopia.jpg',
                'desc' => 'El mapa de surf más relajante y popular. Ideal para principiantes y veteranos.',
                'link' => 'https://steamcommunity.com/sharedfiles/filedetails/?id=3070522105',
                'tags' => ['Surf', 'Relax', 'Movement']
            ],
            [
                'title' => 'Bhop_Sakura',
                'category' => 'BHOP',
                'author' => 'Sam',
                'image' => 'img/workshop/bhopsakura.jpeg',
                'desc' => 'Mapa de BunnyHop estéticamente precioso con temática japonesa.',
                'link' => 'https://steamcommunity.com/sharedfiles/filedetails/?id=3075676348',
                'tags' => ['Bhop', 'Hard', 'Anime']
            ],

            // --- UTILITY ---
            [
                'title' => 'Mirage Instant Smokes',
                'category' => 'UTILITY',
                'author' => 'Dolnma',
                'image' => 'img/workshop/miragesmoke.jpeg',
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