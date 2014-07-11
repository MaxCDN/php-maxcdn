<?php
// Include Composer Autoloader
$loader = require_once(__DIR__ . "/../vendor/autoload.php");

$api = new MaxCDN("my_alias","consumer_key","consumer_secret");
try {
  echo  $api->get('/zones/pull.json');
} catch(CurlException $e) {
  print_r($e->getMessage());
  print_r($e->getHeaders());
} 
