<?php

require __DIR__ . '/vendor/autoload.php';

use Symfony\Component\HttpClient\HttpClient;

$url = 'https://raw.githubusercontent.com/ByMykel/CSGO-API/main/public/api/en/skins.json';
$client = HttpClient::create();

echo "Fetching skin data from $url...\n";
$response = $client->request('GET', $url);
$skins = $response->toArray();

echo "First skin structure:\n";
print_r($skins[0]);

// Check for any price fields in the first 10 items
echo "\nChecking first 10 items for price fields...\n";
for ($i = 0; $i < 10; $i++) {
    echo "Item $i keys: " . implode(', ', array_keys($skins[$i])) . "\n";
}
