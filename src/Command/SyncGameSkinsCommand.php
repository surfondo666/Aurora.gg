<?php

namespace App\Command;

use App\Entity\GameSkin;
use App\Repository\GameSkinRepository;
use App\Service\PricempireService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Contracts\HttpClient\HttpClientInterface;

#[AsCommand(
    name: 'app:sync-game-skins',
    description: 'Syncs skin prices from ByMykel JSON for the Higher or Lower game',
)]
class SyncGameSkinsCommand extends Command
{
    private $entityManager;
    private $gameSkinRepository;
    private $httpClient;
    private $pricempireService;

    public function __construct(
        EntityManagerInterface $entityManager,
        GameSkinRepository $gameSkinRepository,
        HttpClientInterface $httpClient,
        PricempireService $pricempireService
    ) {
        parent::__construct();
        $this->entityManager = $entityManager;
        $this->gameSkinRepository = $gameSkinRepository;
        $this->httpClient = $httpClient;
        $this->pricempireService = $pricempireService;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $io->title('Syncing Game Skins (Hybrid: ByMykel + Pricempire)...');

        $priceMap = [];
        // 1. Fetch Pricempire Prices first (Real Market Data)
        $io->section('Fetching Real Prices from Pricempire...');
        try {
            // Attempt to fetch prices
            $priceMap = $this->pricempireService->getAllPrices();
            $io->text('Fetched sizes: ' . count($priceMap) . ' prices.');
        } catch (\Exception $e) {
            $io->warning('Pricempire API failed: ' . $e->getMessage());
            $io->warning('Falling back to ByMykel JSON + Mock Prices for unknown items.');
            // Continue execution with empty price map
        }

        // 2. Fetch ByMykel JSON (Metadata & Images)
        $url = 'https://raw.githubusercontent.com/ByMykel/CSGO-API/main/public/api/en/skins.json';
        $io->section("Fetching Metadata from $url...");

        try {
            $response = $this->httpClient->request('GET', $url);
            $skinsData = $response->toArray();
        } catch (\Exception $e) {
            $io->error('Failed to fetch metadata: ' . $e->getMessage());
            return Command::FAILURE;
        }

        $io->text('Fetched metadata for ' . count($skinsData) . ' skins.');

        // 3. Clear existing data
        $io->section('Clearing old data from game_skin table...');
        $connection = $this->entityManager->getConnection();
        // Use truncate if platform supports it, or simple delete
        $platform = $connection->getDatabasePlatform();
        try {
            $connection->executeStatement($platform->getTruncateTableSQL('game_skin', true));
        } catch (\Exception $e) {
            $connection->executeStatement('DELETE FROM game_skin');
        }

        // 4. Process and Insert
        $batchSize = 100;
        $i = 0;
        $processedCount = 0;
        $matchedCount = 0;

        // Define known popular items map from original build_cache.php for reliability
        $targetItems = [
            'AWP | Dragon Lore (Factory New)' => 15000.00,
            'M4A4 | Howl (Factory New)' => 5000.00,
            'AK-47 | Wild Lotus (Factory New)' => 12000.00,
            'AWP | Gungnir (Factory New)' => 11000.00,
            'Karambit | Doppler (Factory New)' => 1500.00,
            'Butterfly Knife | Fade (Factory New)' => 2800.00,
            'M9 Bayonet | Doppler (Factory New)' => 1200.00,
            'AK-47 | Fire Serpent (Minimal Wear)' => 1800.00,
            'Sport Gloves | Vice (Factory New)' => 20000.00,
            'Sport Gloves | Pandora\'s Box (Factory New)' => 30000.00,
            'AK-47 | Gold Arabesque (Factory New)' => 4000.00,
            'Desert Eagle | Blaze (Factory New)' => 900.00,
            'Glock-18 | Fade (Factory New)' => 1600.00,
            'AWP | The Prince (Factory New)' => 3500.00,
            'M4A1-S | Welcome to the Jungle (Factory New)' => 2500.00,
            'AUG | Akihabara Accept (Factory New)' => 3000.00,
            'USP-S | Kill Confirmed (Factory New)' => 150.00,
            'AK-47 | Asiimov (Factory New)' => 180.00,
            'AWP | Asiimov (Field-Tested)' => 90.00,
            'Desert Eagle | Printstream (Factory New)' => 80.00,
            'M4A1-S | Printstream (Factory New)' => 300.00,
            'Karambit | Gamma Doppler (Factory New)' => 1800.00,
            'Butterfly Knife | Marble Fade (Factory New)' => 2200.00,
            'M9 Bayonet | Lore (Factory New)' => 3500.00,
            'Specialist Gloves | Crimson Kimono (Factory New)' => 10000.00,
            'Driver Gloves | King Snake (Factory New)' => 12000.00,
            'AK-47 | Case Hardened (Factory New)' => 500.00,
            'AWP | Medusa (Factory New)' => 4500.00,
            'M4A4 | Poseidon (Factory New)' => 1300.00,
            'Glock-18 | Dragon Tattoo (Factory New)' => 100.00
        ];

        foreach ($skinsData as $skinData) {
            $name = $skinData['name'] ?? null;
            $image = $skinData['image'] ?? null;
            $rarityName = $skinData['rarity']['name'] ?? 'Common';

            if (!$name || !$image)
                continue;

            // Search for match in targetItems (Hardcoded Popular List - Always reliable)
            $price = 0.0;
            $useName = $name;
            $isPopular = false;

            // 1. check popular list first
            foreach ($targetItems as $targetName => $targetPrice) {
                $targetBase = trim(preg_replace('/ \(.*\)$/', '', $targetName));
                if ($targetBase === $name || '★ ' . $targetBase === $name) {
                    $price = $targetPrice;
                    // Add some variance
                    $variance = $price * (rand(-20, 20) / 1000);
                    $price = round($price + $variance, 2);
                    $useName = $targetName;
                    $isPopular = true;
                    break;
                }
            }

            // 2. If not popular, check API Price Map (if available)
            // We search for standard wears
            if (!$isPopular && !empty($priceMap)) {
                $wears = ['(Factory New)', '(Minimal Wear)', '(Field-Tested)'];
                foreach ($wears as $wear) {
                    $fullName = $name . ' ' . $wear;
                    if (isset($priceMap[$fullName])) {
                        $price = $priceMap[$fullName];

                        if ($price > 0.50) { // Skip cheap
                            $useName = $fullName;
                            $isPopular = true; // Found matching price
                            break;
                        }
                    }
                }
            }

            // 3. If still no price (API failed or item not in API), use Mock Price based on Rarity
            // This ensures we populate the database even without API
            if (!$isPopular) {
                // Use default name (add Field-Tested if weapon to make it sound real, or just name)
                if (strpos($name, '★') === false && strpos($name, 'Key') === false && strpos($name, 'Case') === false && strpos($name, 'Paquete') === false && strpos($name, 'Capsule') === false) {
                    $useName = $name . ' (Field-Tested)';
                } else {
                    $useName = $name;
                }
                $price = $this->getMockPrice($rarityName);
            }

            if ($price <= 0.05)
                continue; // Skip trash to keep game data clean

            // Create Entity
            $skin = new GameSkin();
            $skin->setName($useName);
            $skin->setPrice($price);
            $skin->setImage($image);

            $this->entityManager->persist($skin);
            $matchedCount++;

            if (($matchedCount % $batchSize) === 0) {
                $this->entityManager->flush();
                $this->entityManager->clear();
            }
            $processedCount++;

            // Limit for dev safety? No, sync all capable.
        }

        $this->entityManager->flush();
        $this->entityManager->clear();

        $io->success("Synced $matchedCount game skins (processed $processedCount templates) successfully.");
        return Command::SUCCESS;
    }

    private function getMockPrice(string $rarity): float
    {
        // Generate random float price
        switch ($rarity) {
            case 'Contraband':
                return $this->randomFloat(2000, 5000);
            case 'Extraordinary':
                return $this->randomFloat(500, 2000);
            case 'Covert':
                return $this->randomFloat(50, 500);
            case 'Classified':
                return $this->randomFloat(10, 50);
            case 'Restricted':
                return $this->randomFloat(2, 10);
            case 'Mil-Spec Grade':
                return $this->randomFloat(0.5, 2);
            case 'Industrial Grade':
                return $this->randomFloat(0.1, 0.5);
            default:
                return $this->randomFloat(0.03, 1.0);
        }
    }

    private function randomFloat($min, $max)
    {
        return round($min + mt_rand() / mt_getrandmax() * ($max - $min), 2);
    }
}
