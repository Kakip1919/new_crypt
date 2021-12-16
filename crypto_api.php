<?php /** @noinspection ALL */

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



#######################BTC######################################
//   JPY⇒BTC⇒ETH⇒JPY
    public function BTCETH_result(): array
    {
        $ETHJPY = $this->commission($this->get_api(29)->market_bid);
        $BTCETH= $this->get_api(5)->market_bid * $this->commission($this->get_api(37)->market_bid);
        return [ceil(($this->investment / $BTCETH) * $ETHJPY), ceil(($this->investment / $ETHJPY) * $BTCETH)];
    }


    //   JPY⇒BTC⇒XRP⇒JPY
    public function BTCXRP_result(): array
    {
        $XRPJPY = $this->commission($this->get_api(83)->market_bid);
        $XRPBTC = $this->get_api(5)->market_bid * $this->commission($this->get_api(111)->market_bid);
        return [ceil(($this->investment / $XRPBTC) * $XRPJPY), ceil(($this->investment / $XRPJPY) * $XRPBTC)];
    }


    //   JPY⇒BTC⇒QASH⇒JPY
    public function BTCQASH_result(): array
    {
        $XRPJPY = $this->commission($this->get_api(50)->market_bid);
        $XRPBTC = $this->get_api(5)->market_bid * $this->commission($this->get_api(52)->market_bid);
        return [ceil(($this->investment / $XRPBTC) * $XRPJPY), ceil(($this->investment / $XRPJPY) * $XRPBTC)];
    }


    //   JPY⇒BTC⇒BCH⇒JPY
    public function BTCBCH_result(): array
    {
        $XRPJPY = $this->commission($this->get_api(41)->market_bid);
        $XRPBTC = $this->get_api(5)->market_bid * $this->commission($this->get_api(114)->market_bid);
        return [ceil(($this->investment / $XRPBTC) * $XRPJPY), ceil(($this->investment / $XRPJPY) * $XRPBTC)];
    }


#######################BTC######################################











#######################ETH######################################
//   JPY⇒ETH⇒BTC⇒JPY
    public function ETHBTC_result(): array
    {
        $ETHJPY = $this->get_api(29)->market_bid;
        $ETHBTC = $this->get_api(5)->market_bid * $this->commission($this->get_api(37)->market_bid);


        return [ceil(($this->investment / $ETHBTC) * $ETHJPY), ceil(($this->investment / $ETHJPY) * $ETHBTC)];
    }
//   JPY⇒ETH⇒QASH⇒JPY
    public function ETHQASH_result(): array
    {
        $XRPJPY = $this->commission($this->get_api(50)->market_bid);
        $XRPBTC = $this->get_api(29)->market_bid * $this->commission($this->get_api(51)->market_bid);
        return [ceil(($this->investment / $XRPBTC) * $XRPJPY), ceil(($this->investment / $XRPJPY) * $XRPBTC)];
    }
    #######################ETH######################################













    #######################QASH######################################

    public function QASHETH_result(): array
    {
        $XRPJPY = $this->commission($this->get_api(50)->market_bid);
        $XRPBTC = $this->get_api(29)->market_bid * $this->commission($this->get_api(51)->market_bid);
        return [ceil(($this->investment / $XRPBTC) * $XRPJPY), ceil(($this->investment / $XRPJPY) * $XRPBTC)];
    }

    //   JPY⇒QASH⇒BTC⇒JPY
    public function QASHBTC_result(): array
    {
        $XRPJPY = $this->commission($this->get_api(50)->market_bid);
        $XRPBTC = $this->get_api(5)->market_bid * $this->commission($this->get_api(52)->market_bid);
        return [ceil(($this->investment / $XRPBTC) * $XRPJPY), ceil(($this->investment / $XRPJPY) * $XRPBTC)];
    }

    //   JPY⇒XRP⇒QASH⇒JPY
    public function XRPQASH_result(): array
    {
        $XRPJPY = $this->commission($this->get_api(83)->market_bid);
        $XRPBTC = $this->get_api(50)->market_bid * $this->commission($this->get_api(88)->market_bid);
        return [ceil(($this->investment / $XRPBTC) * $XRPJPY), ceil(($this->investment / $XRPJPY) * $XRPBTC)];
    }

    //   JPY⇒QASH⇒XRP⇒JPY
    public function QASHXRP_result(): array
    {
        $XRPJPY = $this->commission($this->get_api(83)->market_bid);
        $XRPBTC = $this->get_api(50)->market_bid * $this->commission($this->get_api(88)->market_bid);
        return [ceil(($this->investment / $XRPBTC) * $XRPJPY), ceil(($this->investment / $XRPJPY) * $XRPBTC)];
    }



#######################QASH######################################







#######################XRP######################################
//   JPY⇒XRP⇒BTC⇒JPY
    public function XRPBTC_result(): array
    {
        $XRPJPY = $this->commission($this->get_api(83)->market_bid);
        $XRPBTC = $this->get_api(5)->market_bid * $this->commission($this->get_api(111)->market_bid);
        return [ceil(($this->investment / $XRPBTC) * $XRPJPY), ceil(($this->investment / $XRPJPY) * $XRPBTC)];
    }

#######################XRP######################################







#######################BCH######################################


    //   JPY⇒BCH⇒BTC⇒JPY
    public function BCHBTC_result(): array
    {
        $XRPJPY = $this->commission($this->get_api(41)->market_bid);
        $XRPBTC = $this->get_api(5)->market_bid * $this->commission($this->get_api(114)->market_bid);
        return [ceil(($this->investment / $XRPBTC) * $XRPJPY), ceil(($this->investment / $XRPJPY) * $XRPBTC)];
    }

#######################BCH######################################








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
