<?php

include('PHP/protect.php'); if(!isset($_SESSION)){session_start();}

include_once("conexao.php");

$marca = $_POST['marca'] ?? null;
$modelo = $_POST['modelo'] ?? null;
$placa = $_POST['placa'] ?? null;
$eletrico = $_POST['eletrico'] ?? null;
$id_usuario = $_SESSION['id_usuario'];
$data_criacao = date('Y-m-d H:i:s');

$sql = "INSERT INTO Carro (marca, modelo, placa, eletrico, data_criacao, id_usuario) 
VALUES ('$marca', '$modelo', '$placa', '$eletrico', '$data_criacao', '$id_usuario')";
$stmt = mysqli_prepare($conexao, $sql);
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);

header("Location: http://localhost/NewPark/NewPark/Index.html");
exit();

mysqli_close($conexao);

?>