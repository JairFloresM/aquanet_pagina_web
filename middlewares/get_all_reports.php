<?php

require_once("variables.php");



$curl = curl_init();
curl_setopt($curl, CURLOPT_URL,  $url . 'report-fields');
curl_setopt($curl, CURLOPT_HTTPHEADER, array(
    'APIKEY: 111111111111111111111',
    'x-access-token: ' . $_SESSION['token'],
    'Content-Type: application/json',
));
/** Ingresamos la url de la api o servicio a consumir */
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
/**Permitimos recibir respuesta*/
curl_setopt($curl, CURLOPT_HTTPGET, true);
curl_setopt($curl, CURLOPT_HEADER, 0);
curl_setopt($curl, CURLOPT_POST, false);

$data = curl_exec($curl);

$reports = json_decode($data, true);

$reports = $reports['data'];
