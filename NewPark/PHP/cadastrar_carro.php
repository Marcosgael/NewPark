<?php

include_once("conexao.php");

$marca = $_POST['marca'] ?? null;
$modelo = $_POST['modelo'] ?? null;
$placa = $_POST['placa'] ?? null;
$eletrico = $_POST['eletrico'] ?? null;
$id_usuario = $_POST['id_usuario'] ?? null;

$sql = "INSERT INTO Carro (marca, modelo, placa, eletrico, id_usuario) 
VALUES ('$marca', '$modelo', '$placa', '$eletrico', '$id_usuario')";
$stmt = mysqli_prepare($conexao, $sql);
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);

header("Location: http://localhost/NewPark/NewPark/Index.html");
exit();

mysqli_close($conexao);

?>