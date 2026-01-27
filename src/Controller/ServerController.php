<?php

namespace App\Controller;

use App\Entity\Server;
use App\Form\ServerType;
use App\Repository\ServerRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse; // Importante
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use xPaw\SourceQuery\SourceQuery; // La librería que instalamos

#[Route('/servers')]
class ServerController extends AbstractController
{
    // 1. VISTA PÚBLICA (Solo renderiza el esqueleto HTML)
    #[Route('/', name: 'app_servers')]
    public function index(ServerRepository $serverRepository): Response
    {
        return $this->render('server/index.html.twig', [
            'servers' => $serverRepository->findAll(),
        ]);
    }

    // 2. API DE ESTADO EN TIEMPO REAL (AJAX)
    #[Route('/api/status/{id}', name: 'app_server_status', methods: ['GET'])]
    public function serverStatus(Server $server): JsonResponse
    {
        // Iniciamos la librería de consulta
        $query = new SourceQuery();
        $info = [];
        $online = false;

        try {
            // Intentamos conectar (Timeout aumentado a 3 segundos)
            $query->Connect($server->getIpAdress(), $server->getPort() ?? 27015, 3, SourceQuery::SOURCE);

            // Obtenemos la info real
            $info = $query->GetInfo();
            $online = true;
        } catch (\Exception $e) {
            // Si falla, es que está offline
            $online = false;
        } finally {
            $query->Disconnect();
        }

        if ($online) {
            return $this->json([
                'online' => true,
                'map' => $info['Map'] ?? 'Unknown',
                'players' => $info['Players'] ?? 0,
                'max_players' => $info['MaxPlayers'] ?? 0,
                'ping' => rand(20, 60) // Simulación de ping cliente-servidor
            ]);
        } else {
            return $this->json(['online' => false]);
        }
    }

    // 3. CREAR (SOLO ADMIN)
    #[Route('/new', name: 'app_server_new')]
    public function new(Request $request, EntityManagerInterface $em): Response
    {
        // SEGURIDAD: Solo admin entra aquí
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        $server = new Server();
        // Valores por defecto para que no falle la BD al guardar
        $server->setPlayers(0);
        $server->setMaxPlayers(0);
        $server->setPing(0);
        $server->setMap('Loading...');

        $form = $this->createForm(ServerType::class, $server);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($server);
            $em->flush();
            return $this->redirectToRoute('app_servers');
        }

        return $this->render('server/new.html.twig', [
            'form' => $form->createView(),
            'pageTitle' => 'Añadir Servidor'
        ]);
    }

    // 4. BORRAR (SOLO ADMIN)
    #[Route('/{id}/delete', name: 'app_server_delete')]
    public function delete(Server $server, EntityManagerInterface $em): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        $em->remove($server);
        $em->flush();
        return $this->redirectToRoute('app_servers');
    }

    // 5. EDITAR (SOLO ADMIN)
    #[Route('/{id}/edit', name: 'app_server_edit')]
    public function edit(Request $request, Server $server, EntityManagerInterface $em): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        $form = $this->createForm(ServerType::class, $server);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            return $this->redirectToRoute('app_servers');
        }

        return $this->render('server/new.html.twig', [
            'form' => $form->createView(),
            'pageTitle' => 'Editar Servidor'
        ]);
    }
}