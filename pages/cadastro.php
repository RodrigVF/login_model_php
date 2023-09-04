<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <main>
        <h1>Cadastro</h1>
        <form action="../controllers/cadastroController.php" method="POST">
            <label for="nome">Nome: </label>
            <input type="text" name="nome" id="nome"><br>

            <label for="email">E-mail: </label>
            <input type="email" name="email" id="email"><br>

            <label for="usuario">Usuario: </label>
            <input type="text" name="usuario" id="usuario"><br>

            <label for="senha">Senha: </label>
            <input type="password" name="senha" id="senha"><br>

            <input type="submit" value="Cadastrar">
        </form>
        <p>Já tem um cadastro? <a href="./index.php">Faça login</a></p>
    </main>
</body>
</html>