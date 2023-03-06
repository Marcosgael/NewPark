<?php

include_once("conexao.php");

$nome = $_POST['nome'] ?? null;
$endereco = $_POST['endereco'] ?? null;
$cep = $_POST['cep'] ?? null;
$estado = $_POST['estado'] ?? null;
$cidade = $_POST['cidade'] ?? null;
$bairro = $_POST['bairro'] ?? null;
$horario_funcionamento_inicio = $_POST['horario_funcionamento_inicio'] ?? null;
$horario_funcionamento_fim = $_POST['horario_funcionamento_fim'] ?? null;
$id_empresa = $_POST['id_empresa'] ?? null;
$telefone = $_POST['telefone'] ?? null;

$sql = "INSERT INTO Estacionamento (nome, endereco, cep, estado, cidade, bairro, horario_funcionamento_inicio, horario_funcionamento_fim, id_empresa, telefone) 
        VALUES ('$nome', '$endereco', '$cep', '$estado', '$cidade', '$bairro', '$horario_funcionamento_inicio', '$horario_funcionamento_fim', '$id_empresa', '$telefone')";

$stmt = mysqli_prepare($conexao, $sql);
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);

header("Location: http://localhost/NewPark/NewPark/Index.html");
exit();

mysqli_close($conexao);

?>