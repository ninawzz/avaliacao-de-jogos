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
                        <h2 class="card-title text-center mb-4">Cadastrar Jogo</h2>
                        <form action="?pg=cadastrar_jogos" method="post" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="nome" class="form-label">Nome do jogo:</label>
                                <input type="text" class="form-control" id="nome" name="nome" required>
                            </div>
                            <div class="mb-3">
                                <label for="genero" class="form-label">Gênero:</label>
                                <input type="text" class="form-control" id="genero" name="genero" required>
                            </div>
                            <div class="mb-3">
                                <label for="avaliacao" class="form-label">Avaliação:</label>
                                <input type="number" class="form-control" id="avaliacao" name="avaliacao" max="5" value="0">
                            </div>
                            <div class="mb-3">
                                <label for="descricao" class="form-label">Descrição:</label>
                                <input type="text" class="form-control" id="descricao" name="descricao" required>
                            </div>
                            <div class="mb-3">
                                <label for="imagem" class="form-label">Imagem:</label>
                                <input type="file" class="form-control" id="imagem" name="imagem" accept="image/*" required>
                            </div>
                            <button type="submit" class="btn btn-success w-100">Cadastrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (opcional, apenas para componentes interativos, mas não usado aqui) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
