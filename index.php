<?php

$curlHandler = curl_init();

$token = 'eyJhbGciJI';

curl_setopt_array($curlHandler, [
    CURLOPT_URL => 'http://api-leitos.saude.sc.gov.br:3000/csv/taxaOcupacao',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => [
        'Accept: application/json',
        'Authorization: Bearer ' . $token
    ],
]);



/*
curl -X GET "http://api-leitos.saude.sc.gov.br:3000/csv/taxaOcupacao" -H "Accept: application/json" -H "Authorization: Bearer eyJhbGciOiJIUzI1NiI"
*/



/*
Token está errado basta acertar o token 
*/


$response = curl_exec($curlHandler);
curl_close($curlHandler);

print_r($response);
