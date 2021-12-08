<?php

require __DIR__ . '/vendor/autoload.php';

use GuzzleHttp\Client;

function get_api($id){
    $client = new Client();
    $api_result = $client->request('GET', 'https://api.liquid.com/products/'.$id);
    $response = $api_result->getBody();
    return json_decode($response);
}

function commission($coin): float
{
    $result_price = $coin * 0.001;
    return $coin - $result_price;
}

// ETH->JPY - (BTC->JPY * ETH->BTC)
$result_ETH = commission(get_api(29)->market_bid) - commission(get_api(5)->market_bid * get_api(37)->market_bid);

echo $result_ETH;

