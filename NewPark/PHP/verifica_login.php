<?php

include_once("conexao.php");

$email = $_POST['email'] ?? null;
$senha = $_POST['senha'] ?? null;

$sql = "SELECT * FROM Usuario WHERE email = '$email' and senha = '$senha'";
$sql_query = mysqli_query($conexao, $sql);
$quantidade = $sql_query->num_rows;

if($quantidade == 1){
    $user = $sql_query->fetch_assoc();
    $id_usuario = $user['id_usuario'];
    $nome = $user['nome'];
    if(!isset($_SESSION)){
        session_start();
    }
    $_SESSION['id_usuario'] = $id_usuario;
    $_SESSION['nome'] = $nome;
}else{
    echo "falha ao logar";
}

header("Location: http://localhost/NewPark/NewPark/menu.php");
exit();

mysqli_close($conexao);

?>