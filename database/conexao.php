<?php
function conectarDB(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "login_again";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }

    return $conn;
}

function desconectarDB($conn){
    mysqli_close($conn);
}
?>