<?php $nome = "Game Boxe"; ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Game Boxe</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>


<nav class="navbar navbar-expand-sm" style="background-image: url('imagens/nav.png'); background-size: cover; background-position: center;">
    <div class="container-fluid">
        <a href="index.php?pg=conteudo">
            <img src="imagens/logo.png" style="width:90px;">
        </a>
        <ul class="navbar-nav">
            <li class="nav-item mx-4">
                <a class="nav-link active text-white" href="index.php?pg=conteudo">Início</a>
            </li>
            <li class="nav-item mx-4">
                <a class="nav-link text-white" href="index.php?pg=jogos">Jogos</a>
            </li>
            <li class="nav-item mx-4">
                <a class="nav-link text-white" href="index.php?pg=creditos">Quem Somos</a>
            </li>
            <a class="nav-link btn bg-info text-white mx-4 px-3 rounded-pill" href="index.php?pg=avaliacao">
                Login
            </a>
        </ul>
    </div>
</nav>

</html>
