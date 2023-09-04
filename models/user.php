<?php 
include '../database/conexao.php';

class User {
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
        echo "Cadastro realizado com sucesso!";
        echo '<br><a href="../pages/index.php"><button>Fazer login</button></a>';
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    desconectarDB($conn);
}

function validarLogin($usuario, $senha){
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

function mostrarUsuario($usuario){
    $conn = conectarDB();

    $sql = "SELECT * FROM user WHERE usuario='$usuario'";
    $result = mysqli_query($conn, $sql);
    $login = true;

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
          echo "Id: " . $row["id"]. 
          "<br>Nome: : " . $row["nome"]. 
          "<br>Email: " . $row["email"]. 
          "<br>";
        }
      } else {
        echo "Usuario não encontrado";
      }

    desconectarDB($conn);
    return $login;
}

?>