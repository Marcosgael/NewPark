<?php

include_once("conexao.php");
if (!isset($_SESSION)) {
    session_start();
}

$data_criacao = date('Y-m-d') ?? null;
$data_inicio = $_POST['data_inicio'] ?? null;
$data_fim = $_POST['data_fim'] ?? null;
$preco = $_POST['preco'] ?? null;
$id_usuario = $_SESSION['id_usuario'] ?? null;
$id_estacionamento = $_POST['id_estacionamento'] ?? null;
$id_carro = $_POST['id_carro'] ?? null;

$sql = "INSERT INTO Reserva (data_criacao, data_inicio, data_fim, preco, id_usuario, id_estacionamento, id_carro)
        VALUES (?, ?, ?, ?, ?, ?, ?)";

$stmt = mysqli_prepare($conexao, $sql);
if ($stmt) {
    mysqli_stmt_bind_param($stmt, "sssssss", $data_criacao, $data_inicio, $data_fim, $preco, $id_usuario, $id_estacionamento, $id_carro);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
} else {
    echo "Erro ao preparar a consulta SQL: " . mysqli_error($conexao);
}

mysqli_close($conexao);

if ($_SESSION['administrador'] == 1) {
    header("Location: http://localhost/NewPark/NewPark/menu_admin.php");
    exit();
} else {
    header("Location: http://localhost/NewPark/NewPark/menu.php");
    exit();
}

exit();

?>