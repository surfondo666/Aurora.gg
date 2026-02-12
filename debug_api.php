<?php

require __DIR__ . '/vendor/autoload.php';

use Symfony\Component\HttpClient\HttpClient;

$client = HttpClient::create([
    'verify_peer' => false,
    'verify_host' => false,
    'timeout' => 10
]);
$apiKey = '376bd9f5-4a94-4a53-933a-352bd93b2178';

echo "Testing Pricempire API...\n";

try {
    // Try to get a smaller response or just headers first
    // Note: 'sources' might increase payload size.
    $url = 'https://api.pricempire.com/v4/items?api_key=' . $apiKey . '&currency=USD';

    echo "Requesting $url...\n";

    $response = $client->request('GET', $url, [
        'on_progress' => function ($dlNow, $dlSize, $info) {
            // echo "Progress: $dlNow / $dlSize\n";
        }
    ]);

    $statusCode = $response->getStatusCode();
    echo "Status Code: $statusCode\n";

    if ($statusCode === 200) {
        echo "Headers received. Reading stream...\n";

        $content = '';
        foreach ($client->stream($response) as $chunk) {
            $content .= $chunk->getContent();
            if (strlen($content) > 2000) {
                echo "Received " . strlen($content) . " bytes. Stopping debug stream.\n";
                break;
            }
        }

        echo "Response Preview:\n";
        echo substr($content, 0, 2000) . "...\n";

        // Try to decode the partial content to check structure if possible, 
        // or just look at the string.

    } else {
        echo "Error: " . $statusCode . "\n";
        echo $response->getContent(false) . "\n";
    }

} catch (\Exception $e) {
    echo "Exception: " . $e->getMessage() . "\n";
}
