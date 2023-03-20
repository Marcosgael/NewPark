<?php
session_start();

include_once("conexao.php");

$email = $_POST['email'] ?? null;
$senha = $_POST['senha'] ?? null;

if ($email && $senha) {
    $email = mysqli_real_escape_string($conexao, $email);
    $senha = mysqli_real_escape_string($conexao, $senha);

    $sql = "SELECT * FROM Usuario WHERE email = '$email' and senha = '$senha'";
    $sql_query = mysqli_query($conexao, $sql);

    if (!$sql_query) {
        echo "Erro ao conectar ao banco de dados: " . mysqli_error($conexao);
        exit();
    }

    mysqli_close($conexao);

    $quantidade = $sql_query->num_rows;

    if ($quantidade == 1) {
        $user = $sql_query->fetch_assoc();
        $id_usuario = $user['id_usuario'];
        $nome = $user['nome'];
        $administrador = $user['administrador'];

        $_SESSION['id_usuario'] = $id_usuario;
        $_SESSION['nome'] = $nome;
        $_SESSION['administrador'] = $administrador;

        if ($_SESSION['administrador'] == 1) {
            header("Location: http://localhost/NewPark/NewPark/menu_admin.php");
            exit();
        } else {
            header("Location: http://localhost/NewPark/NewPark/menu.php");
            exit();
        }
    } else {
        echo "Email e/ou senha inválidos";
        exit();
    }
} else {
    echo "Email e senha são obrigatórios";
    exit();
}

?>