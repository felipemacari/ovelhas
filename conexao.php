<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$host = "localhost";
$user = "root";
$pass = "";
$db = "ovelhas";

$conexao = new mysqli($host, $user, $pass, $db);

if ($conexao->connect_error) {
    die("Erro na conexão: " . $conexao->connect_error);
}

?>