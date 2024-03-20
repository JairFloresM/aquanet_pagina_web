<?php

session_start();
unset($_SESSION["token"]);
unset($_SESSION["page"]);
session_unset();
session_destroy();

$_SESSION["token"] = 'null';
$_SESSION['id_consultar'] = 'null';

header("Location: ../login.php");
