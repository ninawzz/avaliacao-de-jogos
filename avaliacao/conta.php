<?php

require_once "admin/config.inc.php";

if (session_status() === PHP_SESSION_NONE) session_start();

if (empty($_SESSION['usuario_id'])) {
    echo '<div class="container"><h3 class="text-center my-4">Você precisa estar logado.</h3>';
    echo '<div class="text-center"><a href="index.php?pg=form_login" class="btn btn-secondary">Login</a></div></div>';
    exit;
}

$uid = (int) $_SESSION['usuario_id'];
$stmt = mysqli_prepare($conexao, "SELECT id, nome, email, criado_em FROM usuarios WHERE id = ?");
mysqli_stmt_bind_param($stmt, "i", $uid);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$usuario = mysqli_fetch_assoc($result);

if (!$usuario) {
    echo '<div class="container"><h3 class="text-center my-4">Usuário não encontrado.</h3></div>';
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/jogos/avaliacao-de-jogos/avaliacao/style.css">

    <style>
        body {
            background: linear-gradient(to bottom, #6fb5e4ff, #0c5eaaff, #000000ff);
            color: #ffffff;
            min-height: 100vh;
        }
    </style>
</head>
<body>
<div class="container mt-4" style="margin-bottom: 8%;">
    <h2>Minha Conta</h2>
    <table class="table">
        <tr><th>ID</th><td><?php echo ($usuario['id']); ?></td></tr>
        <tr><th>Nome</th><td><?php echo ($usuario['nome']); ?></td></tr>
        <tr><th>Email</th><td><?php echo ($usuario['email']); ?></td></tr>
        <tr><th>Criado em</th><td><?php echo ($usuario['criado_em']); ?></td></tr>
    </table>

    <a href="index.php?pg=usuario_form_altera&id=<?= $usuario['id'] ?>" class="btn btn-secondary">Editar conta</a>
    <a href="index.php?pg=usuario_delete&id=<?= $usuario['id'] ?>" class="btn btn-secondary">Excluir conta</a>
    <br>
    <br>
</div>
</body>