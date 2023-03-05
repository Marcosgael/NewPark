<?php

include_once("conexao.php");

$nome = $_POST['nome'] ?? null;
$endereco = $_POST['endereco'] ?? null;
$cep = $_POST['cep'] ?? null;
$estado = $_POST['estado'] ?? null;
$cidade = $_POST['cidade'] ?? null;
$bairro = $_POST['bairro'] ?? null;
$cnpj = $_POST['cnpj'] ?? null;
$telefone = $_POST['telefone'] ?? null;


$sql = "INSERT INTO EmpresaEstacionamento (nome, endereco, cep, estado, cidade, bairro, cnpj, telefone) 
VALUES ('$nome', '$endereco', '$cep', '$estado', '$cidade', '$bairro', '$cnpj', '$telefone')";
$stmt = mysqli_prepare($conexao, $sql);
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);

header("Location: http://localhost/NewPark/NewPark/Index.html");
exit();

mysqli_close($conexao);

?>