<?php
$hostname = "185.239.210.154";
$user = "u135882524_new";
$password = "/0wuroCSn";
$database = "u135882524_new";

$conexao = mysqli_connect($hostname, $user, $password, $database);

if (mysqli_connect_errno()) {
    die("Falha na conexão: " . mysqli_connect_error());
}

echo "Conexão estabelecida com sucesso!";
?>