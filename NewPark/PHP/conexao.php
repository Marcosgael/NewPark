<?php
$hostname = "mysql";
$user = "u135882524_new";
$password = "/0wuroCSn";
$database = "u135882524_new";
$conexao = mysqli_connect($hostname, $user, $password, $database);
if(!$conexao){
    print "Falha";
}
?>