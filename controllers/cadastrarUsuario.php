<?php 
    include '../models/user.php';

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    cadastrarUsuario($nome, $email, $usuario, $senha);

    exit();
?>