<?php

$curlHandler = curl_init();

$token = 'eyJh';

curl_setopt_array($curlHandler, [
    CURLOPT_URL => 'http://api-leitos.saude.sc.gov.br:3000/csv/taxaOcupacao',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => [
        'Accept: application/json',
        'Authorization: Bearer ' . $token
    ],
]);

$response = curl_exec($curlHandler);
curl_close($curlHandler);

/*
print_r($response);
*/


$hosp=(explode(',', $response)); //array(1) { [0]=> string(0) "" }


echo $hosp[0]; 
echo " | ";
echo $hosp[1]; 



?>


