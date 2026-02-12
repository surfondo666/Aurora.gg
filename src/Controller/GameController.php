<?php

namespace App\Controller;

use App\Entity\GameSkin;
use App\Repository\GameSkinRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/community/game')]
class GameController extends AbstractController
{
    #[Route('/higher-lower', name: 'app_game_higher_lower')]
    public function index(GameSkinRepository $skinRepository): Response
    {
        // Get two random skins
        $skins = $skinRepository->findAll();
        if (count($skins) < 2) {
            return $this->render('game/error.html.twig', [
                'message' => 'Not enough skins to play. Please run the sync command.',
            ]);
        }

        $randomKeys = array_rand($skins, 2);
        $skin1 = $skins[$randomKeys[0]];
        $skin2 = $skins[$randomKeys[1]];

        return $this->render('game/index.html.twig', [
            'skin1' => $skin1,
            'skin2' => $skin2,
        ]);
    }

    #[Route('/check', name: 'app_game_check', methods: ['POST'])]
    public function check(Request $request, GameSkinRepository $skinRepository): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $skin1Id = $data['skin1Id'] ?? null;
        $skin2Id = $data['skin2Id'] ?? null;
        $choice = $data['choice'] ?? null; // 'higher' or 'lower' (referring to skin2 relative to skin1)

        if (!$skin1Id || !$skin2Id || !$choice) {
            return new JsonResponse(['error' => 'Invalid data'], 400);
        }

        $skin1 = $skinRepository->find($skin1Id);
        $skin2 = $skinRepository->find($skin2Id);

        if (!$skin1 || !$skin2) {
            return new JsonResponse(['error' => 'Skins not found'], 404);
        }

        $correct = false;
        if ($choice === 'higher') {
            $correct = $skin2->getPrice() >= $skin1->getPrice();
        } else {
            $correct = $skin2->getPrice() <= $skin1->getPrice();
        }

        // Get next skin (skin2 becomes skin1, and we get a new skin2)
        // Or just get two new completely random ones?
        // Usually in Higher/Lower, the second one becomes the first one.
        $nextSkin1 = $skin2;

        // Get a random skin that is not nextSkin1
        $allSkins = $skinRepository->findAll();
        do {
            $nextSkin2 = $allSkins[array_rand($allSkins)];
        } while ($nextSkin2->getId() === $nextSkin1->getId());

        return new JsonResponse([
            'correct' => $correct,
            'price1' => $skin1->getPrice(),
            'price2' => $skin2->getPrice(),
            'nextSkin1' => [
                'id' => $nextSkin1->getId(),
                'name' => $nextSkin1->getName(),
                'image' => $nextSkin1->getImage(),
                'price' => $nextSkin1->getPrice(),
            ],
            'nextSkin2' => [
                'id' => $nextSkin2->getId(),
                'name' => $nextSkin2->getName(),
                'image' => $nextSkin2->getImage(),
                // Price is hidden for skin2
            ]
        ]);
    }
}
