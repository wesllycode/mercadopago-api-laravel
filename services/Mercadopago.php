<?php

use GuzzleHttp\Client;

$client = new Client([
    'base_uri' => 'https://api.mercadopago.com/V1'    
]);

$response = $client->request('GET', '/payments',[
    'headers' => [
        'Authorization' => 'Bearer'
    ],
    "Cache-Control" => "no-cache",
	"Accept" => "application/json",
]);