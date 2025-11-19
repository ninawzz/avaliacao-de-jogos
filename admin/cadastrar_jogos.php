<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include '../conexao.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Jogo</title>
</head>
<body>

<h1>Cadastrar Novo Jogo</h1>

<form action="adicionar_jogos.php" method="POST">

    <label>Nome:</label><br>
    <input type="text" name="nome" required><br><br>

    <label>Gênero:</label><br>
    <input type="text" name="genero" required><br><br>

    <label>Ano:</label><br>
    <input type="number" name="ano" required><br><br>

    <button type="submit">Salvar</button>
</form>

</body>
</html>

