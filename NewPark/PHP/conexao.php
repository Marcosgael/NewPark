<?php
$hostname = "185.239.210.154";
$user = "u135882524_newpark2";
$password = "h|9PeajRp";
$database = "u135882524_newpark2";

$conexao = mysqli_connect($hostname, $user, $password, $database);

if (mysqli_connect_errno()) {
    die("Falha na conexão: " . mysqli_connect_error());
}
?>