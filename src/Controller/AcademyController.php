<?php

namespace App\Controller;

use App\Entity\AcademyGuide;
use App\Repository\AcademyGuideRepository;
use App\Repository\AcademyVideoRepository;
use App\Repository\ConsoleCommandRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/academy', name: 'app_academy_')]
class AcademyController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(AcademyVideoRepository $videoRepo, AcademyGuideRepository $guideRepo): Response
    {
        return $this->render('academy/index.html.twig', [
            'recent_videos' => $videoRepo->findBy([], ['id' => 'DESC'], 3),
            'recent_guides' => $guideRepo->findBy([], ['createdAt' => 'DESC'], 3),
        ]);
    }

    #[Route('/commands', name: 'commands')]
    public function commands(ConsoleCommandRepository $commandRepo, Request $request): Response
    {
        $search = $request->query->get('q');
        $category = $request->query->get('category');

        $qb = $commandRepo->createQueryBuilder('c');

        if ($search) {
            $qb->andWhere('c.name LIKE :search OR c.description LIKE :search')
                ->setParameter('search', '%' . $search . '%');
        }

        if ($category) {
            $qb->andWhere('c.category = :category')
                ->setParameter('category', $category);
        }

        $commands = $qb->getQuery()->getResult();

        return $this->render('academy/commands.html.twig', [
            'commands' => $commands,
            'search' => $search,
            'current_category' => $category,
        ]);
    }

    #[Route('/videos', name: 'videos')]
    public function videos(AcademyVideoRepository $videoRepo, Request $request): Response
    {
        $map = $request->query->get('map');
        $type = $request->query->get('type');

        $criteria = [];
        if ($map)
            $criteria['map'] = $map;
        if ($type)
            $criteria['type'] = $type;

        $videos = $videoRepo->findBy($criteria, ['id' => 'DESC']);

        return $this->render('academy/videos.html.twig', [
            'videos' => $videos,
            'current_map' => $map,
            'current_type' => $type,
        ]);
    }

    #[Route('/guides/{id}', name: 'guide_show')]
    public function show_guide(AcademyGuide $guide): Response
    {
        return $this->render('academy/guide_show.html.twig', [
            'guide' => $guide,
        ]);
    }

    #[Route('/guides', name: 'guides')]
    public function guides(AcademyGuideRepository $guideRepo): Response
    {
        $guides = $guideRepo->findBy([], ['createdAt' => 'DESC']);

        return $this->render('academy/guides.html.twig', [
            'guides' => $guides,
        ]);
    }
}
