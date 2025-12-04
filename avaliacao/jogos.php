<?php
    require_once "admin/config.inc.php";
    $sql = "SELECT * FROM jogos";
    $resultado = mysqli_query($conexao, $sql);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <title>Lista de Jogos</title>
    <link rel="stylesheet" href="style.css">
    <style>
    .btn {
    padding: 10px 18px;
    border-radius: 20px !important;
    font-weight: 700;
    color: #ffffff !important;
    background: linear-gradient(to right, #000, #173c47, #3b86b8);
    transition: .4s ease-in-out;
    border: none;
}

    .btn:hover {
        background: linear-gradient(90deg, #a8d0fcff, #185366);
        transform: scale(1.05);
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.9);
    }
    </style>
</head>
<body>


<div class="bg-black text-white text-center position-relative">
    <div class="text-center"><img src="imagens/titulodeavaliacao.png" style="max-width:70%; height:auto;"></div>
    <br><a class="btn btn-sm btn-secondary" href="suasavaliacoes.php">Ver as avaliações</a>
    <br>
    <br>
    <?php
    require_once "componentes/card.php";
    require_once "componentes/estrela.php";
    ?>
</div>
   

</body>
</html>