<?php

namespace App\Controller;

use App\Entity\Post;
use App\Entity\Comment;
use App\Form\PostType;
use App\Form\CommentType;
use App\Repository\PostRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/community')]
class CommunityController extends AbstractController
{
    #[Route('/', name: 'app_community')]
    public function index(): Response
    {
        return $this->render('community/index.html.twig');
    }

    #[Route('/forum', name: 'app_community_forum')]
    public function forum(PostRepository $postRepository, Request $request, EntityManagerInterface $em): Response
    {
        // 1. Manejo del Buscador
        $query = $request->query->get('q');
        if ($query) {
            $posts = $postRepository->searchByQuery($query);
        } else {
            $posts = $postRepository->findBy([], ['createdAt' => 'DESC']);
        }

        // 2. Manejo de "Crear Nuevo Post"
        $post = new Post();
        $form = $this->createForm(PostType::class, $post);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid() && $this->getUser()) {
            $post->setAuthor($this->getUser());
            // La fecha se pone sola en el __construct, pero aseguramos
            $post->setCreatedAt(new \DateTimeImmutable());
            if (!$post->getCategory())
                $post->setCategory('General');

            $em->persist($post);
            $em->flush();

            return $this->redirectToRoute('app_community_forum');
        }

        return $this->render('community/foro.html.twig', [
            'posts' => $posts,
            'postForm' => $form->createView(),
            'searchQuery' => $query
        ]);
    }

    #[Route('/post/{id}', name: 'app_post_show')]
    public function show(Post $post, Request $request, EntityManagerInterface $em): Response
    {
        $comment = new Comment();
        $form = $this->createForm(CommentType::class, $comment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid() && $this->getUser()) {
            $comment->setAuthor($this->getUser());
            $comment->setPost($post);
            $comment->setCreatedAt(new \DateTimeImmutable());

            $em->persist($comment);
            $em->flush();

            return $this->redirectToRoute('app_post_show', ['id' => $post->getId()]);
        }

        return $this->render('community/show.html.twig', [
            'post' => $post,
            'commentForm' => $form->createView()
        ]);
    }

    // --- FUNCIONES AJAX PARA LIKES Y GUARDADOS ---

    #[Route('/post/{id}/like', name: 'app_post_like')]
    public function like(Post $post, EntityManagerInterface $em): Response
    {
        $user = $this->getUser();
        // Devolvemos error 403 si no hay usuario, JS lo capturará
        if (!$user)
            return $this->json(['error' => 'Login required'], 403);

        $liked = false;
        if ($post->getLikes()->contains($user)) {
            $post->removeLike($user);
        } else {
            $post->addLike($user);
            $liked = true;
        }

        $em->flush();

        return $this->json([
            'liked' => $liked,
            'count' => $post->getLikes()->count()
        ]);
    }

    #[Route('/post/{id}/save', name: 'app_post_save')]
    public function save(Post $post, EntityManagerInterface $em): Response
    {
        $user = $this->getUser();
        if (!$user)
            return $this->json(['error' => 'Login required'], 403);

        $saved = false;
        if ($post->getSavedBy()->contains($user)) {
            $post->removeSavedBy($user);
        } else {
            $post->addSavedBy($user);
            $saved = true;
        }

        $em->flush();

        return $this->json([
            'saved' => $saved
        ]);
    }

    #[Route('/profile/posts', name: 'app_my_posts')]
    public function myPosts(): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $user = $this->getUser();

        return $this->render('community/profile.html.twig', [
            'myPosts' => $user->getPosts(),
            'savedPosts' => $user->getSavedPosts()
        ]);
    }
}