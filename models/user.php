<?php 
  include '../database/conexao.php';
  class user {
    public $id;
    public $nome;
    public $email;
    public $usuario;
    public $senha;
  }

  function cadastrarUsuario($nome, $email, $usuario, $senha){
    $conn = conectarDB();
    $sql = "INSERT INTO user (nome, email, usuario, senha)
    VALUES ('$nome', '$email', '$usuario', '$senha')";

    if (mysqli_query($conn, $sql)) {
      echo "Cadastro Realizado com sucesso! <br>";
      echo '<a href="../pages/index.php">Fazer Login<button></a></button>';
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    desconectarDB($conn);
  }
  
  function mostrarUsuario($usuario, $senha){
    $conn = conectarDB();

    $sql = "SELECT * FROM user WHERE usuario='$usuario' AND senha='$senha'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
      while($row = mysqli_fetch_assoc($result)) {
        echo "Id: " . $row["id"]. "
        <br>Nome: " . $row["nome"]. "
        <br>Email: " . $row["email"]. " <br>";
      }
    } else {
      echo "Usuario não encontrado!";
    }

    desconectarDB($conn);
  }
?>