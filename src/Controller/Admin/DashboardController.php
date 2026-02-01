<?php

namespace App\Controller\Admin;

use App\Entity\Skin;
use App\Entity\ConsoleCommand;
use App\Entity\AcademyVideo;
use App\Entity\AcademyGuide;
use App\Controller\Admin\SkinCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        // OPCIÓN A: Redirigir a Skins (Lo que intentamos hacer)
        // Si esto falla, comenta estas 3 líneas y usa la OPCIÓN B de abajo para probar.
        $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
        return $this->redirect($adminUrlGenerator->setController(SkinCrudController::class)->generateUrl());

        // OPCIÓN B: (Solo para depurar si la A falla)
        // return $this->render('@EasyAdmin/page/content.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Aurora GG Admin')
            ->renderContentMaximized();
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');

        yield MenuItem::section('Academia');
        yield MenuItem::linkToCrud('Comandos', 'fas fa-terminal', ConsoleCommand::class);
        yield MenuItem::linkToCrud('Videos', 'fas fa-video', AcademyVideo::class);
        yield MenuItem::linkToCrud('Guías', 'fas fa-book', AcademyGuide::class);
        
        // Asegúrate de que 'app_home' es la ruta correcta, si no, bórrala temporalmente
        yield MenuItem::linkToRoute('Volver a la Web', 'fas fa-arrow-left', 'app_home');
    }
}