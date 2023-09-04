<?php 
    session_start();
    if (!isset($_SESSION['usuario'])){
        header('Location: ../pages/index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <main>
        <h1>Dashboard</h1>
        <?php 
        include '../models/user.php';
        $usuario = $_SESSION['usuario'];
        mostrarUsuario($usuario);
        ?>
        <br><a href="../controllers/logoutController.php"><button>Sair</button></a>
    </main>
</body>
</html>