<?php
$hostname = "localhost";
$bancodedados = "desafio";
$usuario = "root";
$senha = "";

$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);
$mysqli->set_charset('Utf8');
if ($mysqli->connect_errno) {
    echo "Falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

?>