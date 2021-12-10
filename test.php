<?php

require __DIR__ . '/vendor/autoload.php';

use GuzzleHttp\Client;

Class Crypto_Api{

    protected mixed $investment;

    public function __construct()
    {
        $this->investment = !empty($_POST["investment_value"]) ? $_POST["investment_value"] : 100000;
    }

    public function get_api($id){
        $client = new Client();
        try
        {
            $api_result = $client->request('GET', 'https://api.liquid.com/products/' . $id);
        }
        catch (\GuzzleHttp\Exception\GuzzleException $e)
        {
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

    public function Eth_result(): array
    {
        $ETHJPY = $this->commission($this->get_api(29)->market_bid);
        $ETHBTC = $this->get_api(5)->market_bid * $this->commission($this->get_api(37)->market_bid);
        return [ceil(($this->investment / $ETHBTC) * $ETHJPY), ceil(($this->investment / $ETHJPY) * $ETHBTC)];
    }

    public function Qash_result(): array
    {
        $QASHJPY = $this->commission($this->get_api(50)->market_bid);
        $QASHBTC = ($this->get_api(5)->market_bid * $this->commission($this->get_api(52)->market_bid));
        return [ceil(($this->investment / $QASHBTC) * $QASHJPY), ceil(($this->investment / $QASHJPY) * $QASHBTC)];
    }

    public function Xrp_result(): array
    {
        $XRPJPY = $this->commission($this->get_api(83)->market_bid);
        $XRPBTC = ($this->get_api(5)->market_bid * $this->commission($this->get_api(111)->market_bid));
        return [ceil(($this->investment / $XRPBTC) * $XRPJPY), ceil(($this->investment / $XRPJPY) * $XRPBTC)];
    }

    public function Bch_result(): array
    {
        $BCHJPY = $this->commission($this->get_api(114)->market_bid);
        $BCHBTC = ($this->get_api(5)->market_bid * $this->commission($this->get_api(111)->market_bid));
        return [ceil(($this->investment / $BCHBTC) * $BCHJPY), ceil(($this->investment / $BCHJPY) * $BCHBTC)];
    }

    public function default_investment(): int
    {
        return 100000;
    }

    /**
     * @return mixed
     */
    public function getInvestment(): mixed
    {
        return $this->investment;
    }
}
