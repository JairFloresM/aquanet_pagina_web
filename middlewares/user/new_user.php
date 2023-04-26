<?php
session_start();
require_once("../variables.php");



$data = array(
    "username" => $_REQUEST['username'],
    "password" => $_REQUEST['password'],
    "userrole" => $_REQUEST['role']
);






$ch = curl_init();

curl_setopt($ch, CURLOPT_POST, 1);

if ($data) {
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
}

curl_setopt($ch, CURLOPT_URL, $url . 'user');
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'APIKEY: 111111111111111111111',
    'x-access-token: ' . $_SESSION['token'],
    'Content-Type: application/json',
));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
// EXECUTE:
$resultado = curl_exec($ch);
curl_close($ch);



$obj = json_decode($resultado, true);

header("Location: ../../index.php");
