<?php
    require_once "admin/config.inc.php";
    $id = $_REQUEST['id'];
    $sql = "SELECT * FROM avaliacoes WHERE id = $id";
    $resultado = mysqli_query($conexao, $sql);

    while ($suaavaliacao = mysqli_fetch_array($resultado)){
        $id = $suaavaliacao['id'];
        $avaliacao = $suaavaliacao['avaliacao'];
        $descricao = $suaavaliacao['descricao'];
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Avaliação</title>
    <link rel="stylesheet" type="text/css" href="/jogos/avaliacao-de-jogos/avaliacao/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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

        <h2 class="text-center mb-4">Alterar Avaliação</h2>

        <form action="?pg=altera_avaliacao" method="post" enctype="multipart/form-data">

            <input type="hidden" name="id" value="<?= $id ?>">

            <div class="mb-3 text-start">
                <label for="avaliacao" class="form-label">Avaliação:</label>
                <input type="number" class="form-control"
                       id="avaliacao" name="avaliacao"
                       value="<?= $avaliacao ?>" min="0" max="5"
                       step="0.1" required>
            </div>

            <div class="mb-3 text-start">
                <label for="descricao" class="form-label">Descrição da avaliação:</label>
                <input type="text" class="form-control"
                       id="descricao" name="descricao"
                       value="<?= $descricao ?>" required>
            </div>

            <button type="submit" class="btn w-100 mt-3">
                Alterar
            </button>

            <a href='?pg=suasavaliacoes' class="btn w-100 mt-3">
                Voltar
            </a>

        </form>

    </div>
</div>

</body>
</html>
