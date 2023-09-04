<?php 
  session_start();
  if(isset($_SESSION['usuario'])){
    header("Location: ./dashboard.php");
  }
  if(isset($_GET['mensagem'])) {
   $mensagem = $_GET['mensagem'];
   echo "<script> alert('$mensagem');</script>";
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>
<body>
  <main>
    <h1>Login</h1>
    <form action="../controllers/login.php" method="POST">
      <label for="usuario">Usuario:</label>
      <input type="text" name="usuario" id="usuario"><br>
      <label for="senha">Senha:</label>
      <input type="password" name="senha" id="senha"><br>

      <input type="submit" value="Entrar">
      <p>Ainda não tem cadastro? <a href="./cadastro.php">Cadastrar-se</a></p>
    </form>
  </main>
</body>
</html>