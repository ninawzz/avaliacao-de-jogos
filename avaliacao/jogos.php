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
    <h2 class="titulo-jogos">
        Jogos para Avaliação
    </h2>
    <br>
        <a class="btn btn-sm btn-secondary" href="suasavaliacoes.php">Ver a suas avaliações</a>
    <br>
    <br>
</div>
   
<?php
require_once "componentes/card.php";
require_once "componentes/estrela.php";
?>

</body>
</html>