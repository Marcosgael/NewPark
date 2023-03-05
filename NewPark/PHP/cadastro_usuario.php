<?php

include_once("conexao.php");

$nome = $_POST['nome'] ?? null;
$email = $_POST['email'] ?? null;
$senha = $_POST['senha'] ?? null;
$sexo = $_POST['sexo'] ?? null;

$sql = "INSERT INTO Usuario (nome, email, senha, sexo) VALUES ('$nome', '$email', '$senha', '$sexo')";
$stmt = mysqli_prepare($conexao, $sql);
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);

mysqli_close($conexao);

header("Index.html");
exit();
?>