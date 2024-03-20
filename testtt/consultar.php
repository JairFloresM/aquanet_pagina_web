<?php

$url = "http://192.168.0.10:4000/api/sign-user";

$data = array(
    "username" => $_REQUEST['username'],
    "password" => $_REQUEST['password']
);




$ch = curl_init();

curl_setopt($ch, CURLOPT_POST, 1);

if ($data) {
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
}

curl_setopt($ch, CURLOPT_URL, $url);

curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'APIKEY: 111111111111111111111',
    'Content-Type: application/json',
));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
// EXECUTE:
$resultado = curl_exec($ch);

$obj = json_decode($resultado);


// resultado
// print_r($obj);
