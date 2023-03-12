<?php

if(!isset($_SESSION)){
    session_start();
}

if(!isset($_SESSION['id_usuario'])){
    die("acessso negado!");
}

?>