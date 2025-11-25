<?php
    require_once "admin/config.inc.php";
    $id = $_REQUEST['id'];
    $sql = "SELECT * FROM avaliacoes WHERE id = $id";
    $resultado = mysqli_query($conexao, $sql);

    while ($suaavaliacao = mysqli_fetch_array($resultado)){
        $id = $suaavaliacao['id'];
        $nome = $suaavaliacao['nome'];
        $avaliacao = $suaavaliacao['avaliacao'];
        $descricao = $suaavaliacao['descricao'];
    }
?>

<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Jogo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-body">
                        <h2 class="card-title text-center mb-4">Alterar Avaliação</h2>
                        <form action="?pg=altera_avaliacao" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?=$id?>">
                            <div class="mb-3">
                                <label for="avaliacao" class="form-label">Nome do avaliador:</label>
                                <input type="text" class="form-control" id="nome" name="nome" value="<?=$nome?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="avaliacao" class="form-label">Avaliação:</label>
                                <input type="number" class="form-control" id="avaliacao" name="avaliacao" value="<?=$avaliacao?>" min="0" max="5" step="0.1" required>
                            </div>
                            <div class="mb-3">
                                <label for="descricao" class="form-label">Descrição:</label>
                                <input type="text" class="form-control" id="descricao" name="descricao" value="<?=$descricao?>" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Alterar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>