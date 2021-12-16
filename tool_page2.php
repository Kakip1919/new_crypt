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
ini_set('display_errors', "On");
require_once("crypto_api.php");
$GetAPI = new Crypto_Api();
$m = trim(h($_GET['m']));
if($m != 'list'){
?>


<!-- ツール１のコンテンツ -->
<form action="" method="post">
<table class="tool_0_main2"><tbody>
<tr>
<td class="tool_0_e">購入金額</td>
<td class="tool_0_i" colspan="2"><input id="" type="text" name="investment_value" placeholder="￥100,000" class="tool_page1"></input></td>
    <td class="tool_0_h"><p class="tool_0z"><button>実行</button></p></td>
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
<td class="tool_0_i" colspan="2"><input id="" type="text" name="commission" placeholder="" class="tool_page1"></input></td>
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
    <td class="tool_0_a"><img src="./coin_icon/coin_1.png" class="coin">BTCETH<p class="tool_0e">BTC</p></td>
    <td class="tool_0_b"><p class="tool_0">BTC/ETH</p><p class="tool_0">￥<?php echo number_format($GetAPI->ETHBTC_result()[1]) ?></p></td>
    <td class="tool_0_c"><p class="tool_0">ETH/JPY</p><p class="tool_0">￥<?php echo number_format($GetAPI->ETHBTC_result()[0]) ?></p></td>
    <td class="tool_0_d"><p class="tool_0">￥<?php echo $GetAPI->ETHBTC_result()[0] - $GetAPI->ETHBTC_result()[1]; ?></p><p class="tool_0"><?php
            if(!empty($_POST["investment_value"]))
            {
                echo sprintf('%.2f',(($GetAPI->ETHBTC_result()[0] - $GetAPI->ETHBTC_result()[1]) / $_POST["investment_value"]) * 100);
            }
            else
            {
                echo sprintf('%.2f',((($GetAPI->ETHBTC_result()[0] - $GetAPI->ETHBTC_result()[1]) / 100000) * 100));
            }
            ?>%</p></td>
</tr>

<tr>
    <td class="tool_0_a"><img src="./coin_icon/coin_1.png" class="coin">BTCXRP<p class="tool_0e">BTC</p></td>
    <td class="tool_0_b"><p class="tool_0">BTC/XRP</p><p class="tool_0">￥<?php echo number_format($GetAPI->BTCXRP_result()[1]) ?></p></td>
    <td class="tool_0_c"><p class="tool_0">XRP/JPY</p><p class="tool_0">￥<?php echo number_format($GetAPI->BTCXRP_result()[0]) ?></p></td>
    <td class="tool_0_d"><p class="tool_0">￥<?php echo $GetAPI->BTCXRP_result()[0] - $GetAPI->BTCXRP_result()[1]; ?></p><p class="tool_0"><?php
            if(!empty($_POST["investment_value"]))
            {
                echo sprintf('%.2f',(($GetAPI->BTCXRP_result()[0] - $GetAPI->BTCXRP_result()[1]) / $_POST["investment_value"]) * 100);
            }
            else
            {
                echo sprintf('%.2f',((($GetAPI->BTCXRP_result()[0] - $GetAPI->BTCXRP_result()[1]) / 100000) * 100));
            }
            ?>%</p></td>
</tr>


<tr>
    <td class="tool_0_a"><img src="./coin_icon/coin_1.png" class="coin">BTCQASH<p class="tool_0e">BTC</p></td>
    <td class="tool_0_b"><p class="tool_0">BTC/QASH</p><p class="tool_0">￥<?php echo number_format($GetAPI->BTCQASH_result()[1]) ?></p></td>
    <td class="tool_0_c"><p class="tool_0">QASH/JPY</p><p class="tool_0">￥<?php echo number_format($GetAPI->BTCQASH_result()[0]) ?></p></td>
    <td class="tool_0_d"><p class="tool_0">￥<?php echo $GetAPI->BTCQASH_result()[0] - $GetAPI->BTCQASH_result()[1]; ?></p><p class="tool_0"><?php
            if(!empty($_POST["investment_value"]))
            {
                echo sprintf('%.2f',(($GetAPI->BTCQASH_result()[0] - $GetAPI->BTCQASH_result()[1]) / $_POST["investment_value"]) * 100);
            }
            else
            {
                echo sprintf('%.2f',((($GetAPI->BTCQASH_result()[0] - $GetAPI->BTCQASH_result()[1]) / 100000) * 100));
            }
            ?>%</p></td>
</tr>

<tr>
    <td class="tool_0_a"><img src="./coin_icon/coin_1.png" class="coin">BTCBCH<p class="tool_0e">BTC</p></td>
    <td class="tool_0_b"><p class="tool_0">BTC/BCH</p><p class="tool_0">￥<?php echo number_format($GetAPI->BTCBCH_result()[1]) ?></p></td>
    <td class="tool_0_c"><p class="tool_0">BCH/JPY</p><p class="tool_0">￥<?php echo number_format($GetAPI->BTCBCH_result()[0]) ?></p></td>
    <td class="tool_0_d"><p class="tool_0">￥<?php echo $GetAPI->BTCBCH_result()[0] - $GetAPI->BTCBCH_result()[1]; ?></p><p class="tool_0"><?php
            if(!empty($_POST["investment_value"]))
            {
                echo sprintf('%.2f',(($GetAPI->BTCBCH_result()[0] - $GetAPI->BTCBCH_result()[1]) / $_POST["investment_value"]) * 100);
            }
            else
            {
                echo sprintf('%.2f',((($GetAPI->BTCBCH_result()[0] - $GetAPI->BTCBCH_result()[1]) / 100000) * 100));
            }
            ?>%</p></td>
</tr>

<tr>
<td class="tool_0_a"><img src="./coin_icon/coin_2.png" class="coin">ETHBTC<p class="tool_0e">ETH</p></td>
<td class="tool_0_b"><p class="tool_0">ETH/BTC</p><p class="tool_0">￥<?php echo number_format($GetAPI->BTCETH_result()[1]) ?></p></td>
<td class="tool_0_c"><p class="tool_0">ETH/JPY</p><p class="tool_0">￥<?php echo number_format($GetAPI->BTCETH_result()[0]) ?></p></td>

<td class="tool_0_d"><p class="tool_0">￥<?php echo $GetAPI->BTCETH_result()[0] - $GetAPI->BTCETH_result()[1]; ?></p><p class="tool_0"><?php
     if(!empty($_POST["investment_value"]))
     {
        echo sprintf('%.2f',(($GetAPI->BTCETH_result()[0] - $GetAPI->BTCETH_result()[1]) / $_POST["investment_value"]) * 100);
     }
     else
     {
         echo sprintf('%.2f',((($GetAPI->BTCETH_result()[0] - $GetAPI->BTCETH_result()[1]) / 100000) * 100));
     }
             ?>%</p></td>
</tr>

<tr>
    <td class="tool_0_a"><img src="./coin_icon/coin_2.png" class="coin">ETHQASH<p class="tool_0e">ETH</p></td>
    <td class="tool_0_b"><p class="tool_0">ETH/QASH</p><p class="tool_0">￥<?php echo number_format($GetAPI->ETHQASH_result()[1]) ?></p></td>
    <td class="tool_0_c"><p class="tool_0">QASH/JPY</p><p class="tool_0">￥<?php echo number_format($GetAPI->ETHQASH_result()[0]) ?></p></td>
    <td class="tool_0_d"><p class="tool_0">￥<?php echo $GetAPI->ETHQASH_result()[0] - $GetAPI->ETHQASH_result()[1]; ?></p><p class="tool_0"><?php
            if(!empty($_POST["investment_value"]))
            {
                echo sprintf('%.2f',(($GetAPI->ETHQASH_result()[0] - $GetAPI->ETHQASH_result()[1]) / $_POST["investment_value"]) * 100);
            }
            else
            {
                echo sprintf('%.2f',((($GetAPI->ETHQASH_result()[0] - $GetAPI->ETHQASH_result()[1]) / 100000) * 100));
            }
            ?>%</p></td>
</tr>

<tr>
    <td class="tool_0_a"><img src="./coin_icon/coin_3.png" class="coin">XRPBTC<p class="tool_0e">XRP</p></td>
    <td class="tool_0_b"><p class="tool_0">BTC/ETH</p><p class="tool_0">￥<?php echo number_format($GetAPI->XRPBTC_result()[1]) ?></p></td>
    <td class="tool_0_c"><p class="tool_0">ETH/JPY</p><p class="tool_0">￥<?php echo number_format($GetAPI->XRPBTC_result()[0]) ?></p></td>
    <td class="tool_0_d"><p class="tool_0">￥<?php echo $GetAPI->XRPBTC_result()[0] - $GetAPI->XRPBTC_result()[1]; ?></p><p class="tool_0"><?php
            if(!empty($_POST["investment_value"]))
            {
                echo sprintf('%.2f',(($GetAPI->XRPBTC_result()[0] - $GetAPI->XRPBTC_result()[1]) / $_POST["investment_value"]) * 100);
            }
            else
            {
                echo sprintf('%.2f',((($GetAPI->XRPBTC_result()[0] - $GetAPI->XRPBTC_result()[1]) / 100000) * 100));
            }
            ?>%</p></td>
</tr>
<tr>
    <td class="tool_0_a"><img src="./coin_icon/coin_3.png" class="coin">XRPQASH<p class="tool_0e">XRP</p></td>
    <td class="tool_0_b"><p class="tool_0">XRP/QASH</p><p class="tool_0">￥<?php echo number_format($GetAPI->QASHXRP_result()[1]) ?></p></td>
    <td class="tool_0_c"><p class="tool_0">QASH/JPY</p><p class="tool_0">￥<?php echo number_format($GetAPI->ETHQASH_result()[0]) ?></p></td>
    <td class="tool_0_d"><p class="tool_0">￥<?php echo $GetAPI->ETHQASH_result()[0] - $GetAPI->QASHXRP_result()[1]; ?></p><p class="tool_0"><?php
            if(!empty($_POST["investment_value"]))
            {
                echo sprintf('%.2f',(($GetAPI->ETHQASH_result()[0] - $GetAPI->QASHXRP_result()[1]) / $_POST["investment_value"]) * 100);
            }
            else
            {
                echo sprintf('%.2f',((($GetAPI->ETHQASH_result()[0] - $GetAPI->QASHXRP_result()[1]) / 100000) * 100));
            }
            ?>%</p></td>
</tr>
<tr>
    <td class="tool_0_a"><img src="./coin_icon/coin_4.png" class="coin">BCHBTC<p class="tool_0e">BCH</p></td>
    <td class="tool_0_b"><p class="tool_0">BCH/BTC</p><p class="tool_0">￥<?php echo number_format($GetAPI->BCHBTC_result()[1]) ?></p></td>
    <td class="tool_0_c"><p class="tool_0">BCH/JPY</p><p class="tool_0">￥<?php echo number_format($GetAPI->BCHBTC_result()[0]) ?></p></td>
    <td class="tool_0_d"><p class="tool_0">￥<?php echo $GetAPI->BCHBTC_result()[0] - $GetAPI->BCHBTC_result()[1]; ?></p><p class="tool_0"><?php
            if(!empty($_POST["investment_value"]))
            {
                echo sprintf('%.2f',(($GetAPI->BCHBTC_result()[0] - $GetAPI->BCHBTC_result()[1]) / $_POST["investment_value"]) * 100);
            }
            else
            {
                echo sprintf('%.2f',((($GetAPI->BCHBTC_result()[0] - $GetAPI->BCHBTC_result()[1]) / 100000) * 100));
            }
            ?>%</p></td>
</tr>



<tr>
    <td class="tool_0_a"><img src="./coin_icon/coin_26.png" class="coin">QASHBTC<p class="tool_0e">QASH</p></td>
    <td class="tool_0_b"><p class="tool_0">QASH/BTC</p><p class="tool_0">￥<?php echo number_format($GetAPI->QASHBTC_result()[1]) ?></p></td>
    <td class="tool_0_c"><p class="tool_0">QASH/JPY</p><p class="tool_0">￥<?php echo number_format($GetAPI->QASHBTC_result()[0]) ?></p></td>
    <td class="tool_0_d"><p class="tool_0">￥<?php echo $GetAPI->QASHBTC_result()[0] - $GetAPI->QASHBTC_result()[1]; ?></p><p class="tool_0"><?php
            if(!empty($_POST["investment_value"]))
            {
                echo sprintf('%.2f',(($GetAPI->QASHBTC_result()[0] - $GetAPI->QASHBTC_result()[1]) / $_POST["investment_value"]) * 100);
            }
            else
            {
                echo sprintf('%.2f',((($GetAPI->QASHBTC_result()[0] - $GetAPI->QASHBTC_result()[1]) / 100000) * 100));
            }
            ?>%</p></td>
</tr>

<tr>
    <td class="tool_0_a"><img src="./coin_icon/coin_26.png" class="coin">QASHETH<p class="tool_0e">QASH</p></td>
    <td class="tool_0_b"><p class="tool_0">QASH/ETH</p><p class="tool_0">￥<?php echo number_format($GetAPI->QASHETH_result()[1]) ?></p></td>
    <td class="tool_0_c"><p class="tool_0">ETH/JPY</p><p class="tool_0">￥<?php echo number_format($GetAPI->QASHETH_result()[0]) ?></p></td>
    <td class="tool_0_d"><p class="tool_0">￥<?php echo $GetAPI->QASHETH_result()[0] - $GetAPI->QASHETH_result()[1]; ?></p><p class="tool_0"><?php
            if(!empty($_POST["investment_value"]))
            {
                echo sprintf('%.2f',(($GetAPI->QASHETH_result()[0] - $GetAPI->QASHETH_result()[1]) / $_POST["investment_value"]) * 100);
            }
            else
            {
                echo sprintf('%.2f',((($GetAPI->QASHETH_result()[0] - $GetAPI->QASHETH_result()[1]) / 100000) * 100));
            }
            ?>%</p></td>
</tr>

<tr>
    <td class="tool_0_a"><img src="./coin_icon/coin_26.png" class="coin">QASHXRP<p class="tool_0e">QASH</p></td>
    <td class="tool_0_b"><p class="tool_0">QASH/XRP</p><p class="tool_0">￥<?php echo number_format($GetAPI->QASHXRP_result()[1]) ?></p></td>
    <td class="tool_0_c"><p class="tool_0">XRP/JPY</p><p class="tool_0">￥<?php echo number_format($GetAPI->BTCXRP_result()[0]) ?></p></td>
    <td class="tool_0_d"><p class="tool_0">￥<?php echo $GetAPI->BTCXRP_result()[0] - $GetAPI->QASHXRP_result()[1]; ?></p><p class="tool_0"><?php
            if(!empty($_POST["investment_value"]))
            {
                echo sprintf('%.2f',(($GetAPI->BTCXRP_result()[0] - $GetAPI->QASHXRP_result()[1]) / $_POST["investment_value"]) * 100);
            }
            else
            {
                echo sprintf('%.2f',((($GetAPI->BTCXRP_result()[0] - $GetAPI->QASHXRP_result()[1]) / 100000) * 100));
            }
            ?>%</p></td>
</tr>

<tr><td class="tool_0_space" colspan="4"></td></tr>
<tr><td class="tool_0_title" colspan="4">最大価格差</td></tr>
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

</form>
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
