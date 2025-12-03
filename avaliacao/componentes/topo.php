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

<?php
if (session_status() === PHP_SESSION_NONE) session_start();
$logado = !empty($_SESSION['usuario_id']);
?>

<nav class="navbar navbar-expand-sm" style="background-image: url('imagens/nav.png'); background-size: cover; background-position: center;">
    <div class="container-fluid">
        <a href="index.php?pg=conteudo">
            <img src="imagens/logo.png" style="width:90px;">
        </a>
        <ul class="navbar-nav">
            <li class="nav-item mx-4">
                <a class="nav-link active text-white" href="index.php?pg=conteudo">Início</a>
            </li>
            <?php if ($logado): ?>
            <li class="nav-item mx-4">
                <a class="nav-link text-white" href="index.php?pg=jogos">Jogos</a>
            </li>
            <?php endif; ?>

            <?php if ($logado): ?>
            <li class="nav-item mx-4">
                <a class="nav-link text-white" href="index.php?pg=form_sugestao">Sugestões</a>
            </li>
            <?php endif; ?>

            <?php if ($logado): ?>
                <a class="nav-link btn bg-info text-white mx-4 px-3 rounded-pill" href="index.php?pg=conta">
                    Minha Conta
                </a>
                <a class="nav-link text-white" href="index.php?pg=logout">Sair</a>
            <?php else: ?>
                <a class="btn nav-link bg-info text-white mx-4 px-3 rounded-pill" href="index.php?pg=usuario_form">
                    Cadastro/Login
                </a>
            <?php endif; ?>
        </ul>
    </div>
</nav>

</html>
