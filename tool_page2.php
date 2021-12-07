<!doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>recom</title>
<link rel="stylesheet" href="crypto_tool.css"> <!-- Resource style -->
<script src="crypto_tool.js"></script>
</head>

<body>
<!--メインコンテンツ部分-->

<?php 
$m = trim(h($_GET['m']));
if($m != 'list'){
?>


<!-- ツール１のコンテンツ -->
<table class="tool_0_main2"><tbody>
<tr>
<td class="tool_0_e">購入金額</td>
<td class="tool_0_i" colspan="2"><input id="" type="text" name="" placeholder="￥100,000" class="tool_page1"></input></td>
<td class="tool_0_h"><p class="tool_0z">実行</p></td>
</tr>
<tr>
<td class="tool_0_e">表示利幅</td>
<td class="tool_0_f">最大￥5,000▼</td>
<td class="tool_0_g">最小￥100▼</td>
<td class="tool_0_h"><p class="tool_0z">設定</p></td>
</tr>
<tr>
<td class="tool_0_e">表示件数</td>
<td class="tool_0_i" colspan="2"><input id="" type="text" name="" placeholder="5" class="tool_page1"></input></td>
<td class="tool_0_h"><p class="tool_0z">設定</p></td>
</tr>
<tr>
<td class="tool_0_e">手数料設定</td>
<td class="tool_0_i" colspan="2"><input id="" type="text" name="" placeholder="" class="tool_page1"></input></td>
<td class="tool_0_h"><p class="tool_0z">設定</p></td>
</tr>
<tr><td class="tool_0_space" colspan="4"></td></tr>

<tr><td class="tool_0_title" colspan="4">三角裁定取引機会</td></tr>
<tr><td class="tool_0_space" colspan="4"></td></tr>
<tr>
<td class="tool_0_ta">通貨</td>
<td class="tool_0_tb">buy(買い)</td>
<td class="tool_0_tc">sell(売り)</td>
<td class="tool_0_td">スプレッド</td>
</tr>

<tr>
<td class="tool_0_a"><img src="./coin_icon/coin_1.png" class="coin">BTC<p class="tool_0e">ビットコイン</p></td>
<td class="tool_0_b"><p class="tool_0">BTC/XRP</p><p class="tool_0">￥100,000</p></td>
<td class="tool_0_c"><p class="tool_0">XRP/JPY</p><p class="tool_0">￥100,368</p></td>
<td class="tool_0_d"><p class="tool_0">￥368</p><p class="tool_0">0.37%</p></td>
</tr>

<tr>
<td class="tool_0_a"><img src="./coin_icon/coin_2.png" class="coin">ETH<p class="tool_0e">イーサリアム</p></td>
<td class="tool_0_b"><p class="tool_0">ETH/QASH</p><p class="tool_0">￥100,000</p></td>
<td class="tool_0_c"><p class="tool_0">QASH/BTC</p><p class="tool_0">￥100,387</p></td>
<td class="tool_0_d"><p class="tool_0">￥387</p><p class="tool_0">0.39%</p></td>
</tr>

<tr>
<td class="tool_0_a"><img src="./coin_icon/coin_4.png" class="coin">BCH<p class="tool_0e">ビットコインキャッシュ</p></td>
<td class="tool_0_b"><p class="tool_0">BCH/BTC</p><p class="tool_0">￥100,000</p></td>
<td class="tool_0_c"><p class="tool_0">BTC/XRP</p><p class="tool_0">￥100,120</p></td>
<td class="tool_0_d"><p class="tool_0">￥120</p><p class="tool_0">0.12%</p></td>
</tr>

<tr>
<td class="tool_0_a"><img src="./coin_icon/coin_3.png" class="coin">XRP<p class="tool_0e">リップル</p></td>
<td class="tool_0_b"><p class="tool_0">XRP/QASH</p><p class="tool_0">￥100,000</p></td>
<td class="tool_0_c"><p class="tool_0">QASH/JPY</p><p class="tool_0">￥100,179</p></td>
<td class="tool_0_d"><p class="tool_0">￥179</p><p class="tool_0">0.18%</p></td>
</tr>

<tr>
<td class="tool_0_a"><img src="./coin_icon/coin_26.png" class="coin">QASH<p class="tool_0e">キャッシュ</p></td>
<td class="tool_0_b"><p class="tool_0">QASH/ETH</p><p class="tool_0">￥100,000</p></td>
<td class="tool_0_c"><p class="tool_0">ETH/JPY</p><p class="tool_0">￥100,170</p></td>
<td class="tool_0_d"><p class="tool_0">￥170</p><p class="tool_0">0.17%</p></td>
</tr>

<tr><td class="tool_0_space" colspan="4"></td></tr>
<tr><td class="tool_0_title" colspan="4">最大価格差</td></tr>

<tr>
<td class="tool_0_a"><img src="./coin_icon/coin_1.png" class="coin">BTC<p class="tool_0e">ビットコイン</p></td>
<td class="tool_0_b"><p class="tool_0">BTC/XRP</p><p class="tool_0">￥100,000</p></td>
<td class="tool_0_c"><p class="tool_0">XRP/JPY</p><p class="tool_0">￥100,387</p></td>
<td class="tool_0_d"><p class="tool_0">￥387</p><p class="tool_0">0.39%</p></td>
</tr>

</tbody></table>



<!-- ツール１のコンテンツ -->
<table class="tool_0_main2"><tbody>
<tr><td class="tool_0_title" colspan="3">価格表</td></tr>

<tr>
<td class="tool_0_ta">通貨</td>
<td class="tool_0_tb">buy(買い)</td>
<td class="tool_0_tc">sell(売り)</td>
</tr>

<tr>
<td class="tool_0_a" id="tool_1_1a"><img src="./coin_icon/coin_1.png" class="coin2">BTC</td>
<td class="tool_0_b" id="tool_1_1b">￥0</td>
<td class="tool_0_c" id="tool_1_1c">￥0</td>
</tr>

<tr>
<td class="tool_0_a" id="tool_1_2a"><img src="./coin_icon/coin_2.png" class="coin2">ETH</td>
<td class="tool_0_b" id="tool_1_2b">￥0</td>
<td class="tool_0_c" id="tool_1_2c">￥0</td>
</tr>

<tr>
<td class="tool_0_a" id="tool_1_3a"><img src="./coin_icon/coin_4.png" class="coin2">BCH</td>
<td class="tool_0_b" id="tool_1_3b">￥0</td>
<td class="tool_0_c" id="tool_1_3c">￥0</td>
</tr>

<tr>
<td class="tool_0_a" id="tool_1_4a"><img src="./coin_icon/coin_3.png" class="coin2">XRP</td>
<td class="tool_0_b" id="tool_1_4b">￥0</td>
<td class="tool_0_c" id="tool_1_4c">￥0</td>
</tr>

<tr>
<td class="tool_0_a" id="tool_1_5a"><img src="./coin_icon/coin_26.png" class="coin2">QASH</td>
<td class="tool_0_b" id="tool_1_5b">￥0</td>
<td class="tool_0_c" id="tool_1_5c">￥0</td>
</tr>

</tbody></table>
<!-- ツール１のコンテンツ -->


<?php 
}
?>


<!-- メインコンテンツここまで -->
</body>
</html>
<?php
function h($s){
  return htmlspecialchars($s,ENT_QUOTES);
}
?>
