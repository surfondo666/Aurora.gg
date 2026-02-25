<?php

namespace App\Command;

use App\Entity\Skin;
use App\Repository\SkinRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Contracts\HttpClient\HttpClientInterface;

#[AsCommand(
    name: 'app:sync-skins',
    description: 'Syncs real CS2 skins and collections metadata from ByMykel API',
)]
class SyncSkinsCommand extends Command
{
    private $entityManager;
    private $httpClient;

    public function __construct(
        EntityManagerInterface $entityManager,
        HttpClientInterface $httpClient
    ) {
        parent::__construct();
        $this->entityManager = $entityManager;
        $this->httpClient = $httpClient;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $io->title('Syncing Real CS2 Skins and Collections...');

        $localPath = 'public/skins.json';
        if (file_exists($localPath)) {
            $io->text("Using local file $localPath...");
            $skinsData = json_decode(file_get_contents($localPath), true);
        } else {
            $url = 'https://raw.githubusercontent.com/ByMykel/CSGO-API/main/public/api/en/skins.json';
            $io->text("Fetching metadata from $url...");
            try {
                $response = $this->httpClient->request('GET', $url);
                $skinsData = $response->toArray();
            } catch (\Exception $e) {
                $io->error('Failed to fetch metadata: ' . $e->getMessage());
                return Command::FAILURE;
            }
        }

        if (!$skinsData) {
            $io->error('No skin data found.');
            return Command::FAILURE;
        }

        $io->text('Fetched metadata for ' . count($skinsData) . ' skins.');

        // Clear existing data
        $io->section('Clearing old data from skin table...');
        $connection = $this->entityManager->getConnection();
        $platform = $connection->getDatabasePlatform();
        
        try {
            // Attempt TRUNCATE if supported, it's faster and resets IDs on many platforms
            $connection->executeStatement($platform->getTruncateTableSQL('skin', true));
        } catch (\Exception $e) {
            // Fallback for simple delete
            $connection->executeStatement('DELETE FROM skin');
        }

        $io->section('Processing and Inserting Skins...');
        $batchSize = 100;
        $i = 0;

        foreach ($skinsData as $skinData) {
            $name = $skinData['name'] ?? null;
            $image = $skinData['image'] ?? null;
            $rarity = $skinData['rarity']['name'] ?? 'Common';
            
            // Try collections first, then crates
            $collectionName = null;
            if (!empty($skinData['collections'])) {
                $collectionName = $skinData['collections'][0]['name'];
            } elseif (!empty($skinData['crates'])) {
                $collectionName = $skinData['crates'][0]['name'];
            } else {
                $collectionName = $skinData['category']['name'] ?? 'Other';
            }

            if (!$name || !$image || $collectionName === 'Other') {
                continue;
            }

            // Skip graffiti and stickers to keep it focused on weapon skins/gloves
            if (str_contains($collectionName, 'Graffiti') || str_contains($collectionName, 'Sticker')) {
                continue;
            }

            $skin = new Skin();
            $skin->setName($name);
            $skin->setImage($image);
            $skin->setRarity($rarity);
            $skin->setColeccion($collectionName);
            $skin->setWeapon($skinData['weapon']['name'] ?? 'Weapon');
            $skin->setPrice(0.0);
            $skin->setFloat(0.0);
            $skin->setPattern(0);
            $skin->setSeed(0);

            $this->entityManager->persist($skin);
            $i++;

            if (($i % $batchSize) === 0) {
                $this->entityManager->flush();
                $this->entityManager->clear();
            }

            // Limit for dev/preview purposes
            if ($i >= 200) break;
        }

        $this->entityManager->flush();
        $this->entityManager->clear();

        $io->success("Successfully synced $i skins and their collections.");

        return Command::SUCCESS;
    }
}
