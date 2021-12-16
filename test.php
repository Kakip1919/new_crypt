<?php
/** @noinspection ALL */

require __DIR__ . '/vendor/autoload.php';

use GuzzleHttp\Client;

class Crypto_Api
{

    protected mixed $investment;

    public function __construct()
    {
        $this->investment = !empty($_POST["investment_value"]) ? $_POST["investment_value"] : 100000;
    }

    public function get_api($id)
    {
        $client = new Client();
        try {
            $api_result = $client->request('GET', 'https://api.liquid.com/products/' . $id);
        } catch (\GuzzleHttp\Exception\GuzzleException $e) {
            $e->getMessage();
        }

        /** @var Client $api_result */
        $response = $api_result->getBody();
        return json_decode($response);
    }

    public function commission($coin): float
    {
        $result_price = $coin * 0.001;
        return $coin - $result_price;
    }

    public function QASHXRP_result(): array
    {
        $XRPJPY = $this->commission($this->get_api(83)->market_bid);
        $XRPBTC = $this->get_api(50)->market_bid * $this->commission($this->get_api(88)->market_bid);
        return [ceil(($this->investment / $XRPJPY) / $XRPBTC), ceil(($this->investment / $XRPBTC) / $XRPJPY)];
    }


}

$i = new Crypto_Api();

print($i->QASHXRP_result()[0]-$i->QASHXRP_result()[1]);