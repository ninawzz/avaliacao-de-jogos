<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include("../conexao.php");

if (!isset($_POST['id'], $_POST['nome'], $_POST['genero'], $_POST['ano'])) {
    die("Dados não enviados corretamente!");
}

$id = intval($_POST['id']);
$nome = $_POST['nome'];
$genero = $_POST['genero'];
$ano = intval($_POST['ano']);

$sql = "UPDATE jogos SET nome='$nome', genero='$genero', ano='$ano' WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
    exit;
} else {
    echo "Erro ao atualizar: " . $conn->error;
}
?>




