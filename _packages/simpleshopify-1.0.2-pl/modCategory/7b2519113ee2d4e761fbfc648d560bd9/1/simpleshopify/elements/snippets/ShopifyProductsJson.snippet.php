<?php
/* Shopify JSON FEED
*  Wayne Roddy ( wayne@modx.com )
*  Sept. 2016
*  I'm not a PHP developer. No laughing
*/

//https://apikey:password@hostname/products.json

$key = $modx->getOption('simpleshopify.shopify_key');
$pw = $modx->getOption('simpleshopify.shopify_password');
$dom = $modx->getOption('simpleshopify.shopify_domain');
$url = "https://".$key.":".$pw."@".$dom."/products.json";

$ch = curl_init();
$timeout = 5;
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
$data = curl_exec($ch);
curl_close($ch);

//if the feed broke replace with a local backup
if(empty($data)){
    $data = $modx->getChunk("data-cache");
}

return $data;
