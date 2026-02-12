<?php

require __DIR__ . '/vendor/autoload.php';

use Symfony\Component\HttpClient\HttpClient;

$client = HttpClient::create([
    'verify_peer' => false,
    'verify_host' => false,
    'timeout' => 10
]);
$apiKey = '376bd9f5-4a94-4a53-933a-352bd93b2178';

$endpoints = [
    'v2/search (AK-47)' => 'https://api.pricempire.com/v2/search?api_key=' . $apiKey . '&query=AK-47',
    'v1/items (Single)' => 'https://api.pricempire.com/v1/items/AK-47%20%7C%20Asiimov%20(Field-Tested)?api_key=' . $apiKey . '&source=buff163&currency=USD',
    'v2/getItemsPrices (Names)' => 'https://api.pricempire.com/v2/getItemsPrices?api_key=' . $apiKey . '&names=AK-47%20%7C%20Asiimov%20(Field-Tested)',
];

foreach ($endpoints as $name => $url) {
    echo "Testing $name...\n";
    $start = microtime(true);

    try {
        $response = $client->request('GET', $url);
        $statusCode = $response->getStatusCode();
        $duration = microtime(true) - $start;

        echo "Status: $statusCode, Time: " . number_format($duration, 2) . "s\n";

        if ($statusCode === 200) {
            $content = $response->getContent();
            echo "Preview: " . substr($content, 0, 500) . "...\n";
        } else {
            echo "Error: " . substr($response->getContent(false), 0, 200) . "\n";
        }
    } catch (\Exception $e) {
        echo "Exception: " . $e->getMessage() . "\n";
    }
    echo "---------------------------------------------------\n";
}
