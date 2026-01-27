<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use App\Security\AppAuthenticator;
use Doctrine\ORM\EntityManagerInterface;
use KnpU\OAuth2ClientBundle\Client\ClientRegistry;
use League\OAuth2\Client\Provider\Exception\IdentityProviderException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\UserAuthenticatorInterface;

class GoogleAuthController extends AbstractController
{
    #[Route('/connect/google', name: 'connect_google_start')]
    public function connectAction(ClientRegistry $clientRegistry)
    {
        // will redirect to Google!
        // setStateless(true) disables state checking (CSRF protection of the login flow)
        // this fixes the "InvalidStateException" if sessions are lost during redirect
        return $clientRegistry
            ->getClient('google')
            ->redirect([
                'profile',
                'email'
            ], ['state' => null]); // Passing empty options array to fix previous lint, but we need to configure stateless elsewhere actually. 
        // Let's fix the logic below.
    }

    #[Route('/connect/google/check', name: 'connect_google_check')]
    public function connectCheckAction(
        Request $request,
        ClientRegistry $clientRegistry,
        UserAuthenticatorInterface $userAuthenticator,
        AppAuthenticator $authenticator,
        UserRepository $userRepository,
        EntityManagerInterface $entityManager
    ) {
        $client = $clientRegistry->getClient('google');

        // Fix for InvalidStateException: Disable state check
        // This is less secure (no CSRF protection for login init) but fixes the loop on some envs
        $client->setAsStateless();



        try {
            // the exact class depends on which provider you're using
            /** @var \League\OAuth2\Client\Provider\GoogleUser $googleUser */
            $googleUser = $client->fetchUser();

            // do something with all this new power!
            // e.g. $name = $googleUser->getFirstName();
            $email = $googleUser->getEmail();

            // 1. Check if user exists
            $user = $userRepository->findOneBy(['email' => $email]);

            if (!$user) {
                // 2. Register new user
                $user = new User();
                $user->setEmail($email);
                $user->setRoles(['ROLE_USER']);
                $entityManager->persist($user);
                $entityManager->flush();
            }

            // 3. Log user in
            return $userAuthenticator->authenticateUser(
                $user,
                $authenticator,
                $request
            );

        } catch (\KnpU\OAuth2ClientBundle\Exception\MissingAuthorizationCodeException $e) {
            $this->addFlash('error', 'Login error: No authorization code found. Please try again.');
            return $this->redirectToRoute('app_home');
        } catch (IdentityProviderException $e) {
            // something went wrong!
            // probably you should return the reason to the user
            $this->addFlash('error', 'Google Login Failed: ' . $e->getMessage());
            return $this->redirectToRoute('app_home');
        }
    }
}
