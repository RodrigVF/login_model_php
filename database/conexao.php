<?php
function conectarDB() {
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "login_awa";

  $conn = mysqli_connect($servername, $username, $password, $dbname);
  
  if (!$conn) {
    die("Conexão falhou: " . mysqli_connect_error());
  }
  
  return $conn;
}
function desconectarDB($conn) {
  mysqli_close($conn);
}
?>