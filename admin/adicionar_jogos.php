<?php
include '../conexao.php'; // conexão

$nome = $_POST['nome'];
$genero = $_POST['genero'];
$ano = $_POST['ano'];

$sql = "INSERT INTO jogos (nome, genero, ano) VALUES ('$nome', '$genero', '$ano')";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
    exit();
} else {
    echo "Erro ao salvar: " . $conn->error;
}

$conn->close();
?>
