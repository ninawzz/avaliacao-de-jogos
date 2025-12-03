<?php $jogo_id = $_GET['jogo_id']; ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Jogo</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-body">
                        <h2 class="card-title text-center mb-4">Cadastrar Avaliação</h2>
                        <form action="index.php?pg=cadastrar_avaliacao" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="jogo_id" value="<?= $jogo_id ?>">
                            <div class="mb-3">
                                <label for="avaliacao" class="form-label">Avaliação:</label>
                                <input type="number" class="form-control" id="avaliacao" name="avaliacao" max="5" value="0">
                            </div>
                            <div class="mb-3">
                                <label for="descricao" class="form-label">Descrição da avaliação:</label>
                                <input type="text" class="form-control" id="descricao" name="descricao" required>
                            </div>
                            <button type="submit" class="btn btn-success w-100">Cadastrar</button>
                            <br>
                            <br>
                            <a href='index.php?pg=jogos' class="btn btn-success w-100">Voltar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>

    <!-- Bootstrap JS (opcional, apenas para componentes interativos, mas não usado aqui) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>