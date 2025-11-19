<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include("../conexao.php");

if (!isset($_GET['id'])) {
    die("ID não enviado!");
}

$id = intval($_GET['id']);

$sql = "SELECT * FROM jogos WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows == 0) {
    die("Jogo não encontrado!");
}

$dado = $result->fetch_assoc();
?>

<form action="form_jogos.alterar.php" method="post">
    <input type="hidden" name="id" value="<?= $dado['id'] ?>">

    Nome: <input type="text" name="nome" value="<?= $dado['nome'] ?>"><br><br>
    Gênero: <input type="text" name="genero" value="<?= $dado['genero'] ?>"><br><br>
    Ano: <input type="number" name="ano" value="<?= $dado['ano'] ?>"><br><br>

    <button type="submit">Salvar alterações</button>
</form>

