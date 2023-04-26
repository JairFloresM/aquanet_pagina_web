<?php

// session_start();
// unset($_SESSION["token"]);
// unset($_SESSION["page"]);
// session_unset();
// session_destroy();

// Solo esto me funciono para cerrar la sesion en php, no entiendo como lo otro es que no funciona
$_SESSION["token"] = 'null';
$_SESSION['id_consultar'] = 'null';

header("Location: ../login.php");
