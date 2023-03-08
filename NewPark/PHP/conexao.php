<?php
$hostname = "185.239.210.154";
$user = "u135882524_new";
$password = "/0wuroCSn";
$database = "u135882524_new";

// tenta se conectar ao banco de dados
$conexao = mysqli_connect($hostname, $user, $password, $database);

// verifica se a conexão foi estabelecida com sucesso
if (mysqli_connect_errno()) {
    die("Falha na conexão: " . mysqli_connect_error());
}

// código a ser executado após a conexão ser estabelecida com sucesso
echo "Conexão estabelecida com sucesso!";
?>