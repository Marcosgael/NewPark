<?php

include_once("conexao.php");

$usuario = $_POST['usuario'] ?? null;
$senha = $_POST['senha'] ?? null;

$sql = "INSERT INTO user (Login, Senha) VALUES ('$usuario', '$senha')";
$stmt = mysqli_prepare($conexao, $sql);
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);

mysqli_close($conexao);

?>