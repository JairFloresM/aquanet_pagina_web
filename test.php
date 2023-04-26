<?php
session_start();

echo 'funciona la session?';
print_r($_SESSION['token']);
print_r($_SESSION['test']);
