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