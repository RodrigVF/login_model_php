<?php 
  include '../database/conexao.php';
  function verificarLogin($usuario, $senha) {
    $conn = conectarDB();

    $sql = "SELECT * FROM user WHERE usuario='$usuario' AND senha='$senha'";
    $result = mysqli_query($conn, $sql);
    $login = true;
    if (mysqli_num_rows($result) <= 0) {
      $login = false;
    }
    desconectarDB($conn);
    return $login;
  }

  $usuario = $_POST['usuario'];
  $senha = $_POST['senha'];

  if(verificarLogin($usuario, $senha)){
    session_start();
    $_SESSION['usuario'] = $usuario;
    $_SESSION['senha'] = $senha;
    header("Location: ../pages/dashboard.php");
    exit();
  } else {
    $mensagem = 'Usuario e/ou senha incorreto(s)';
    header("Location: ../pages/index.php?mensagem=". urlencode($mensagem));
    exit();
  }
?>