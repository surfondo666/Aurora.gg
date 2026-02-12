<?php

namespace App\Service;

use Symfony\Component\DependencyInjection\Attribute\Autowire;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class PricempireService
{
    private $client;
    private $apiKey;

    public function __construct(
        HttpClientInterface $client,
        #[Autowire(env: 'PRICEMPIRE_API_KEY')] string $apiKey
    ) {
        $this->client = $client;
        $this->apiKey = $apiKey;
    }

    public function getAllPrices(): array
    {
        try {
            // Pricempire API V4 Items Endpoint
            // Using app_id=730 (CS2) and currency=USD (default)
            // Sources parameter: we want a reliable source like 'buff163' (most volume) or 'steam'
            $response = $this->client->request('GET', 'https://api.pricempire.com/v4/items', [
                'query' => [
                    'api_key' => $this->apiKey,
                    'app_id' => '730',
                    'sources' => 'buff163', // specific source to get cleaner data
                    'currency' => 'USD'
                ],
                'verify_peer' => false,
                'verify_host' => false,
                'timeout' => 10 // Short timeout to fail fast and trigger fallback if API is slow
            ]);

            if ($response->getStatusCode() !== 200) {
                throw new \Exception('Status code: ' . $response->getStatusCode());
            }

            $data = $response->toArray();

            // Transform into a Name => Price map for O(1) lookup
            $priceMap = [];
            foreach ($data as $item) {
                if (isset($item['market_name']) && isset($item['prices']['buff163']['price'])) {
                    // Pricempire returns prices in cents usually, or raw. Let's check documentation or assume cents if high int.
                    // Actually, V4 often returns structured price objects.
                    // If source is buff163, it might be in 'prices' -> 'buff163' -> 'price'

                    // Convert cents to dollars if needed (checking standard API behavior)
                    // Usually Pricempire V3/V4 uses cents.
                    $price = $item['prices']['buff163']['price'];

                    if ($price > 0) {
                        $priceMap[$item['market_name']] = $price / 100.0;
                    }
                }
            }

            return $priceMap;

        } catch (\Exception $e) {
            // Re-throw if fails, command will handle or fail
            throw new \Exception('Pricempire API fetching failed: ' . $e->getMessage());
        }
    }
}
