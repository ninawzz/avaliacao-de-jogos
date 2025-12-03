<?php
require_once "admin/config.inc.php";

$pasta = __DIR__ . "/imagem_jogos/";

if (!is_dir($pasta)) {
    mkdir($pasta, 0755, true);
}

$mensagem = "";
$erro = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nomeImagem = "";

    if (!empty($_FILES['imagem']['name'])) {

        $nomeOriginal = basename($_FILES['imagem']['name']);
        $temp = $_FILES['imagem']['tmp_name'];

        $nomeImagem = time() . "_" . $nomeOriginal;

        if (!move_uploaded_file($temp, $pasta . $nomeImagem)) {
            $erro = true;
            $mensagem = "Erro ao mover a imagem!";
        }
    }

    if (!$erro) {
        $sql = "INSERT INTO sugestoes (nome, genero, descricao, imagem)
                VALUES (
                    '{$_POST['nome']}',
                    '{$_POST['genero']}',
                    '{$_POST['descricao']}',
                    '$nomeImagem'
                )";

        $execute = mysqli_query($conexao, $sql);
    }
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

<div class="container text-center" style="margin-bottom: 150px; margin-top: 150px;">

    <div class="message-card mx-auto col-md-6">

        <?php if ($_SERVER['REQUEST_METHOD'] === 'POST') : ?>
            
            <?php if ($execute) : ?>
                <h2 class="mb-4">Sugestão cadastrada com sucesso!</h2>
            <?php else : ?>
                <h2 class="mb-4">Erro ao cadastrar sugestão!</h2>
            <?php endif; ?>

            <a href="index.php?pg=jogos" class="btn w-100 mt-3">Voltar</a>

        <?php else : ?>

            <h2 class="mb-3">Nenhuma sugestão enviada!</h2>
            <a href="index.php?pg=jogos" class="btn w-100 mt-3">Voltar</a>

        <?php endif; ?>

    </div>
</div>

</body>
</html>
