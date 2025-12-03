<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Usuário</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-body">
                        <h2 class="card-title text-center mb-4">Cadastrar Usuário</h2>
                        <form action="?pg=usuario_cadastrar" method="post">
                            <div class="mb-3">
                                <label for="nome" class="form-label">Nome:</label>
                                <input type="text" class="form-control" id="nome" name="nome" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email:</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="senha_hash" class="form-label">Senha:</label>
                                <input type="password" class="form-control" id="senha_hash" name="senha_hash" required>
                            </div>
                            <div class="mb-3">
                                <label for="senha_hash" class="form-label">Confirmar Senha:</label>
                                <input type="password" class="form-control" id="confirmar_senha" name="confirmar_senha" required>
                            </div>
                            <button type="submit" class="btn btn-secondary w-100">Cadastrar</button>
                            <br>
                            <br>
                            <a href='index.php' class="btn btn-secondary w-100">Voltar</a>
                            <br>
                            <br>
                            <a href='form_login.php' class="btn btn-secondary w-100">Login (Caso ja tenha criado uma conta)</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>