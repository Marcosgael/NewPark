<?php

include_once("conexao.php"); 

$nome = $_POST['nome'] ?? null;
$email = $_POST['email'] ?? null;
$endereco = $_POST['endereco'] ?? null;
$cep = $_POST['cep'] ?? null;
$estado = $_POST['estado'] ?? null;
$cidade = $_POST['cidade'] ?? null;
$bairro = $_POST['bairro'] ?? null;
$cnpj = $_POST['cnpj'] ?? null;
$telefone = $_POST['telefone'] ?? null;
$data_criacao = date('Y-m-d') ?? null;

echo " $nome, $email, $endereco, $cep, $estado, $cidade, $bairro, $cnpj, $telefone, $data_criacao";

$sql = "INSERT INTO EmpresaEstacionamento (nome, email, endereco, cep, estado, cidade, bairro, cnpj, telefone, data_criacao)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = mysqli_prepare($conexao, $sql);
if ($stmt) {
    mysqli_stmt_bind_param($stmt, "ssssssssss", $nome, $email, $endereco, $cep, $estado, $cidade, $bairro, $cnpj, $telefone, $data_criacao);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
} else {
    echo "Erro ao preparar a consulta SQL: " . mysqli_error($conexao);
}

mysqli_close($conexao);

header("Location: http://localhost/NewPark/NewPark/menu_admin.html");

exit();

?>