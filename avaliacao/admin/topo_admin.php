<?php $nome = "Game Boxe";
session_start();


if (!isset($_SESSION['admin']) || $_SESSION['admin'] !== true) {
    header("Location: ../form_loginadm.php"); 
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Game Boxe</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<nav class="navbar navbar-expand-sm bg-black navbar-dark">
    <div class="container-fluid">
        <div class="text-center"><img src="../imagens/logo.png" style="width:90px;"></div>
        <ul class="navbar-nav">
            <li class="nav-item mx-4">
                <a class="nav-link active" href="?pg=admin_jogos">Jogos</a>
            <li class="nav-item mx-4">
                <a class="nav-link active" href="?pg=sugestao_usuario">Sugestões</a>
            <li class="nav-item mx-4">
                <a class="nav-link active" href="?pg=avaliacao_usuarios">Avaliações</a>
            <li class="nav-item mx-4">
                <a class="nav-link active" href="?pg=usuarios">Usuários</a>
             <li class="nav-item mx-4">
                <a class="nav-link active" href="../logout.php">Sair</a>
                

    </div>
</nav>