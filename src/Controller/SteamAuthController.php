<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use App\Security\AppAuthenticator;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\UserAuthenticatorInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class SteamAuthController extends AbstractController
{
    private const STEAM_LOGIN_URL = 'https://steamcommunity.com/openid/login';

    public function __construct(
        private HttpClientInterface $client,
        private UserRepository $userRepository,
        private EntityManagerInterface $entityManager,
        private UserAuthenticatorInterface $userAuthenticator,
        private AppAuthenticator $authenticator,
        private LoggerInterface $logger,
        private string $steamApiKey
    ) {
    }

    #[Route('/login/steam', name: 'steam_login')]
    public function login(): Response
    {
        $params = [
            'openid.ns' => 'http://specs.openid.net/auth/2.0',
            'openid.mode' => 'checkid_setup',
            'openid.return_to' => $this->generateUrl('steam_check', [], 0),
            'openid.realm' => $this->generateUrl('app_inventory', [], 0), // Realm can be the home or inventory
            'openid.identity' => 'http://specs.openid.net/auth/2.0/identifier_select',
            'openid.claimed_id' => 'http://specs.openid.net/auth/2.0/identifier_select',
        ];

        return $this->redirect(self::STEAM_LOGIN_URL . '?' . http_build_query($params));
    }

    #[Route('/login/steam/check', name: 'steam_check')]
    public function check(Request $request): Response
    {
        $this->logger->info('Steam check started (New Controller)');

        $params = $this->getSteamParams($request);

        if (empty($params)) {
            $this->addFlash('error', 'Steam returned no parameters.');
            return $this->redirectToRoute('app_inventory');
        }

        // Validate with Steam
        if ($this->validateSteamAuth($params)) {
            // Extract SteamID
            // openid_claimed_id: https://steamcommunity.com/openid/id/76561198000000000
            $claimedId = $params['openid.claimed_id'] ?? $params['openid_claimed_id'] ?? '';

            if (preg_match('#^https://steamcommunity.com/openid/id/([0-9]{17,25})#', $claimedId, $matches)) {
                $steamId = $matches[1];

                return $this->authenticateUser($steamId, $request);
            } else {
                $this->addFlash('error', 'Could not extract SteamID from claimed_id.');
            }
        } else {
            $this->addFlash('error', 'Steam validation failed (signature mismatch or invalid).');
        }

        return $this->redirectToRoute('app_inventory');
    }

    private function getSteamParams(Request $request): array
    {
        // Manual parsing to avoid PHP replacing dot with underscore
        $queryString = $request->server->get('QUERY_STRING', '');
        $params = [];

        if (!empty($queryString)) {
            foreach (explode('&', $queryString) as $param) {
                $parts = explode('=', $param, 2);
                if (count($parts) === 2) {
                    $key = urldecode($parts[0]);
                    $value = urldecode($parts[1]);
                    $params[$key] = $value;
                }
            }
        }
        return $params;
    }

    private function validateSteamAuth(array $params): bool
    {
        // Prepare validation request
        $validateParams = [
            'openid.assoc_handle' => $params['openid.assoc_handle'] ?? '',
            'openid.signed' => $params['openid.signed'] ?? '',
            'openid.sig' => $params['openid.sig'] ?? '',
            'openid.ns' => 'http://specs.openid.net/auth/2.0',
            'openid.mode' => 'check_authentication',
        ];

        // We must add every field listed in 'openid.signed' to the validation parameters
        $signedFields = explode(',', $validateParams['openid.signed']);
        foreach ($signedFields as $field) {
            $key = 'openid.' . $field;
            if (isset($params[$key])) {
                $validateParams[$key] = $params[$key];
            }
        }

        try {
            $response = $this->client->request('POST', self::STEAM_LOGIN_URL, [
                'body' => $validateParams
            ]);

            $content = $response->getContent();
            return str_contains($content, 'is_valid:true');

        } catch (\Exception $e) {
            $this->logger->error('Steam Validation Exception', ['exception' => $e]);
            return false;
        }
    }

    private function authenticateUser(string $steamId, Request $request): Response
    {
        // 1. Fetch User Profile from Steam API
        $userData = $this->fetchSteamUserProfile($steamId);
        $personaName = $userData['personaname'] ?? 'Steam User';
        $avatarUrl = $userData['avatarfull'] ?? null;

        // 2. Find or Create User
        $user = $this->userRepository->findOneBy(['steamId' => $steamId]);
        if (!$user) {
            $user = new User();
            $user->setSteamId($steamId);
            $user->setRoles(['ROLE_USER']);
        }

        $user->setSteamAvatar($avatarUrl);
        // Note: You might want to save personaName if you have a field for it

        $this->entityManager->persist($user);
        $this->entityManager->flush();

        // 3. Store session data for display
        $request->getSession()->set('steam_persona', $personaName);
        $request->getSession()->set('steam_id', $steamId);

        // 4. Log in via Symfony Security
        return $this->userAuthenticator->authenticateUser(
            $user,
            $this->authenticator,
            $request
        );
    }

    private function fetchSteamUserProfile(string $steamId): array
    {
        try {
            $url = "https://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key={$this->steamApiKey}&steamids={$steamId}";
            $response = $this->client->request('GET', $url);
            $data = $response->toArray();
            return $data['response']['players'][0] ?? [];
        } catch (\Exception $e) {
            $this->logger->error('Failed to fetch Steam profile', ['exception' => $e]);
            return [];
        }
    }
}
