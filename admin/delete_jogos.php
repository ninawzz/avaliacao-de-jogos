<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include("../conexao.php");

if (!isset($_GET['id']) || empty($_GET['id'])) {
    die("ID inválido!");
}

$id = (int) $_GET['id'];

$sql = "DELETE FROM jogos WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
    exit;
} else {
    echo "Erro ao deletar: " . $conn->error;
}
?>

