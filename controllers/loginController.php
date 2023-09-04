<?php 
    include '../models/user.php';

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    if(validarLogin($usuario, $senha)){
        session_start();
        $_SESSION['usuario'] = $usuario;
        $_SESSION['senha'] = $senha;
        header('Location: ../pages/dashboard.php');
        exit();
    } else {
        $mensagem = 'Usuario e/ou senha incorreto(s)!';
        header('Location: ../pages/index.php?mensagem='. $mensagem);
    }


?>