<?php

$pagina = $_REQUEST['page'];

if (is_null($pagina)) {
    $pagina = 'dashboard';
}


session_start();
$_SESSION['page'] = $pagina;


if (array_key_exists('id_consultar', $_REQUEST)) {
    $_SESSION['id_consultar'] = $_REQUEST['id_consultar'];
}

header("Location: ../index.php");
