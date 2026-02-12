<?php

require __DIR__ . '/vendor/autoload.php';

use Symfony\Component\HttpClient\HttpClient;

$client = HttpClient::create([
    'verify_peer' => false,
    'verify_host' => false,
    'timeout' => 30
]);
$apiKey = '376bd9f5-4a94-4a53-933a-352bd93b2178';

$endpoints = [
    'v2/getItemsPrices' => 'https://api.pricempire.com/v2/getItemsPrices?api_key=' . $apiKey . '&currency=USD&source=buff163',
    'v4/paid/items' => 'https://api.pricempire.com/v4/paid/items?api_key=' . $apiKey . '&currency=USD&sources=buff163',
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
            // Read first 1kb to check structure
            $content = '';
            foreach ($client->stream($response) as $chunk) {
                $content .= $chunk->getContent();
                if (strlen($content) > 1000)
                    break;
            }
            echo "Preview: " . substr($content, 0, 500) . "...\n";
        } else {
            echo "Error: " . substr($response->getContent(false), 0, 200) . "\n";
        }
    } catch (\Exception $e) {
        echo "Exception: " . $e->getMessage() . "\n";
    }
    echo "---------------------------------------------------\n";
}
