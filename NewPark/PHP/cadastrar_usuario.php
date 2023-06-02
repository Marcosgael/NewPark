<?php

include('PHP/protect.php');
if (!isset($_SESSION)) {
    session_start();
}

include_once("conexao.php");

$nome = $_POST['nome'] ?? null;
$email = $_POST['email'] ?? null;
$senha = $_POST['senha'] ?? null;
$sexo = $_POST['sexo'] ?? null;
$telefone = $_POST['telefone'] ?? null;

$sql = "INSERT INTO Usuario (nome, email, senha, sexo, telefone, administrador) 
VALUES ('$nome', '$email', '$senha', '$sexo', '$telefone', 0)";
$stmt = mysqli_prepare($conexao, $sql);
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);

if ($_SESSION['administrador'] == 1) {
    header("Location: http://localhost/NewPark/NewPark/menu_admin.php");
    exit();
} else {
    header("Location: http://localhost/NewPark/NewPark/menu.php");
    exit();
}

mysqli_close($conexao);
exit();
?>