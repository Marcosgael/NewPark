<?php
$hostname = 'localhost';
$user = 'root';
$password = "1234";
$database = "usertest";
$conexao = mysqli_connect($hostname, $user, $password, $database);
if(!$conexao){
    print "Falha";
}
?>