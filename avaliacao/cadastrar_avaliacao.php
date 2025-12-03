<?php
require_once "admin/config.inc.php";

$jogo_id = $_POST['jogo_id'];
$user_id = $_SESSION['usuario_id'];
$avaliacao = $_POST['avaliacao'];
$descricao = $_POST['descricao'];

$sql = "INSERT INTO avaliacoes (jogo_id, usuario_id, avaliacao, descricao)
        VALUES ('$jogo_id', '$user_id', '{$_POST['avaliacao']}', '{$_POST['descricao']}')";

$execute = mysqli_query($conexao, $sql);

if ($execute) {

    $sql_media = "SELECT AVG(avaliacao) AS media
                  FROM avaliacoes
                  WHERE jogo_id = '$jogo_id'";
    $resultado_media = mysqli_query($conexao, $sql_media);

    $dados = mysqli_fetch_assoc($resultado_media);
    $media = $dados['media'];

    $sql_update = "UPDATE jogos SET avaliacao = '$media' WHERE id = '$jogo_id'";
    mysqli_query($conexao, $sql_update);
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

        <?php if ($execute) : ?>
            <h2 class="mb-4">Avaliação cadastrada com sucesso!</h2>
        <?php else : ?>
            <h2 class="mb-4">Erro ao cadastrar avaliação!</h2>
        <?php endif; ?>

        <a href="index.php?pg=jogos" class="btn w-100 mt-3">Voltar</a>

    </div>
</div>

</body>
</html>
