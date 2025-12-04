<?php
require_once "admin/config.inc.php";

$id = $_POST['id'];
$avaliacao = $_POST['avaliacao'];
$descricao = $_POST['descricao'];

$sql = "UPDATE avaliacoes SET
        avaliacao = '$avaliacao',
        descricao = '$descricao'
        WHERE id = '$id'";

$resultado = mysqli_query($conexao, $sql);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <style>
        body {
            background: linear-gradient(to bottom, #6fb5e4ff, #0c5eaaff, #000000ff);
            color: #ffffff;
            min-height: 100vh;
        }
        .message-card {
            animation: slideUp .8s ease;
            border-radius: 18px;
            padding: 25px;
            background: rgba(0, 0, 0, 0.65);
            backdrop-filter: blur(6px);
            box-shadow: 0 0 25px rgba(0,153,255,0.25);
        }
    </style>
</head>

<body>

<div class="container text-center" style="margin-bottom: 150px;margin-top: 150px;">

    <div class="message-card mx-auto col-md-6">

        <?php if ($resultado) : ?>
            <h2 class="mb-4">Avaliação alterada com sucesso!</h2>
        <?php else : ?>
            <h2 class="mb-4">Erro ao alterar avaliação!</h2>
        <?php endif; ?>

        <a href="index.php?pg=suasavaliacoes" class="btn w-100 mt-3">Voltar</a>

    </div>
</div>

</body>
</html>
