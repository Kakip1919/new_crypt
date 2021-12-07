<?php
// Guzzleを利用するためComposerのautoload.phpを読み込み
require __DIR__ . '/vendor/autoload.php';
// Clientクラスをインポート
use GuzzleHttp\Client;

// Clientクラスのインスタンスを作成
$client = new Client();

// リクエストURLを指定

//$response = $client->request('GET', 'https://api.liquid.com/products/5');
//$res = $response->getBody();
//$res = json_decode($res);
//
//echo $res->market_ask;

