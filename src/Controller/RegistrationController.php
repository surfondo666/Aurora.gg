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
        $app_user = new User();
        $form = $this->createForm(RegistrationFormType::class, $app_user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $app_user->setPassword(
                $userPasswordHasher->hashPassword(
                    $app_user,
                    $form->get('plainPassword')->getData()
                )
            );

            $entityManager->persist($app_user);
            $entityManager->flush();

            return $security->login($app_user, AppAuthenticator::class, 'main');
        }

        return $this->render('security/register.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }

}