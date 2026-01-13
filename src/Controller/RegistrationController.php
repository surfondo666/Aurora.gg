<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationFormType;
use App\Security\AppAuthenticator;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class RegistrationController extends AbstractController // Podrías renombrarla a AuthController
{
    // --- ACCIÓN 1: REGISTRO (Tu código original) ---
    #[Route('/register', name: 'app_register')]
    public function register(Request $request, UserPasswordHasherInterface $userPasswordHasher, Security $security, EntityManagerInterface $entityManager): Response
    {
        $user = new User();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user->setPassword(
                $userPasswordHasher->hashPassword(
                    $user,
                    $form->get('plainPassword')->getData()
                )
            );

            $entityManager->persist($user);
            $entityManager->flush();

            return $security->login($user, AppAuthenticator::class, 'main');
        }

        return $this->render('security/register.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }

    // --- ACCIÓN 2: LOGIN (Añadido en el mismo controlador) ---
    #[Route(path: '/login', name: 'app_login')]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // Si el usuario ya está logueado, redirigirlo
        if ($this->getUser()) {
             return $this->redirectToRoute('app_home'); // O la ruta que quieras
        }

        // Obtener el error de login si lo hubo
        $error = $authenticationUtils->getLastAuthenticationError();
        // Último nombre de usuario introducido
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', [
            'last_username' => $lastUsername, 
            'error' => $error
        ]);
    }

    // --- ACCIÓN 3: LOGOUT (Añadido en el mismo controlador) ---
    #[Route(path: '/logout', name: 'app_logout')]
    public function logout(): void
    {
        // Este método puede estar vacío, Symfony lo intercepta automáticamente
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }
}