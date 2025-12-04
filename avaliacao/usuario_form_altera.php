<?php
require_once "admin/config.inc.php";

$id = $_REQUEST['id'];

$sql = "SELECT * FROM usuarios WHERE id = $id";
$resultado = mysqli_query($conexao, $sql);

if (mysqli_num_rows($resultado) === 0) {
    echo "<h3>Usuário não encontrado!</h3>";
    exit;
}

$usuario = mysqli_fetch_array($resultado);
$nome = $usuario['nome'];
$email = $usuario['email'];
?>

<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Alterar Usuário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-body">
                    <h2 class="card-title text-center mb-4">Alterar Usuário</h2>
                    <form action="?pg=usuario_altera" method="post">
                        <input type="hidden" name="id" value="<?=$id?>">
                        <div class="mb-3">
                            <label class="form-label">Nome:</label>
                            <input type="text" class="form-control" name="nome" value="<?=$nome?>" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email:</label>
                            <input type="email" class="form-control" name="email" value="<?=$email?>" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nova senha (opcional):</label>
                            <input type="password" class="form-control" name="senha_hash">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Confirmar nova senha:</label>
                            <input type="password" class="form-control" name="confirmar_senha">
                        </div>
                        <button type="submit" class="btn btn-secondary w-100">Alterar</button>
                        <br>
                        <br>
                        <a href="?pg=conta" class="btn btn-secondary w-100">Voltar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
</body>
</html>