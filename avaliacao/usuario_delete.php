<?php

require_once "admin/config.inc.php";

$id = $_GET['id'];

if (!$id) {
    echo '<div class="container"><h2 class="text-center my-4">ID inválido!</h2></div>';
    echo '<div class="text-center"><a href="index.php?pg=conteudo" class="btn btn-danger">Voltar</a></div>';
    exit;
}

session_unset();
session_destroy();

$sql = "DELETE FROM usuarios WHERE id = ?";
$stmt = mysqli_prepare($conexao, $sql);

mysqli_stmt_bind_param($stmt, "i", $id);
$resultado = mysqli_stmt_execute($stmt);

if ($resultado) {
    echo '<div class="container"><h2 class="text-center my-4">Usuário excluída com sucesso!</h2></div>';
    echo '<div class="text-center"><a href="index.php?pg=conteudo" class="btn btn-secondary">Voltar</a></div>';
    echo '<br><br>';
} else {
    echo '<div class="container"><h2 class="text-center my-4">Erro ao excluir usuário!</h2></div>';
    echo '<div class="text-center"><a href="index.php?pg=conteudo" class="btn btn-secondary">Voltar</a></div>';
    echo '<br><br>';
}

mysqli_stmt_close($stmt);