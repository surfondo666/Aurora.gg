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

            // --- SURF ---
            [
                'title' => 'Surf Utopia (CS2 Port)',
                'category' => 'SURF',
                'author' => 'SneaK',
                'image' => 'img/workshop/surf_utopia.jpg',
                'desc' => 'El mapa de surf más relajante y popular. Ideal para principiantes y veteranos.',
                'link' => 'https://steamcommunity.com/sharedfiles/filedetails/?id=3070522105',
                'tags' => ['Surf', 'Relax', 'Movement']
            ],

            // --- UTILITY ---
            [
                'title' => 'Dust 2 Utility',
                'category' => 'UTILITY',
                'author' => 'Leander',
                'image' => 'img/workshop/DustUtility.jpeg',
                'desc' => 'Aprende todos los humos, flashes y molos de Dust sin tiempos de espera.',
                'link' => 'https://steamcommunity.com/sharedfiles/filedetails/?id=3360435602',
                'tags' => ['Nades', 'Tactical', 'Competitive']
            ],
            [
                'title' => 'Mirage Utility',
                'category' => 'UTILITY',
                'author' => 'Leander',
                'image' => 'img/workshop/MirageUtility.jpeg',
                'desc' => 'Aprende todos los humos, flashes y molos de Mirage sin tiempos de espera.',
                'link' => 'https://steamcommunity.com/sharedfiles/filedetails/?id=3312981414',
                'tags' => ['Nades', 'Tactical', 'Competitive']
            ],
            [
                'title' => 'Nuke Utility',
                'category' => 'UTILITY',
                'author' => 'Leander',
                'image' => 'img/workshop/NukeUtility.jpeg',
                'desc' => 'Aprende todos los humos, flashes y molos de Nuke sin tiempos de espera.',
                'link' => 'https://steamcommunity.com/sharedfiles/filedetails/?id=3340925621',
                'tags' => ['Nades', 'Tactical', 'Competitive']
            ],
            [
                'title' => 'Inferno Utility',
                'category' => 'UTILITY',
                'author' => 'Leander',
                'image' => 'img/workshop/InfernoUtility.jpeg',
                'desc' => 'Aprende todos los humos, flashes y molos de Inferno sin tiempos de espera.',
                'link' => 'https://steamcommunity.com/sharedfiles/filedetails/?id=3332771164',
                'tags' => ['Nades', 'Tactical', 'Competitive']
            ],
            [
                'title' => 'Ancient Utility',
                'category' => 'UTILITY',
                'author' => 'Leander',
                'image' => 'img/workshop/AncientUtility.jpeg',
                'desc' => 'Aprende todos los humos, flashes y molos de Ancient sin tiempos de espera.',
                'link' => 'https://steamcommunity.com/sharedfiles/filedetails/?id=3351615311',
                'tags' => ['Nades', 'Tactical', 'Competitive']
            ],
            [
                'title' => 'Anubis Utility',
                'category' => 'UTILITY',
                'author' => 'Leander',
                'image' => 'img/workshop/AnubisUtility.jpeg',
                'desc' => 'Aprende todos los humos, flashes y molos de Anubis sin tiempos de espera.',
                'link' => 'https://steamcommunity.com/sharedfiles/filedetails/?id=3368313759',
                'tags' => ['Nades', 'Tactical', 'Competitive']
            ],
        ];

        return $this->render('workshop/index.html.twig', [
            'maps' => $maps,
        ]);
    }
}