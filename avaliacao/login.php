<?php
require_once "admin/config.inc.php";

$email = $_POST['email'];
$senha = $_POST['senha_hash'];

$sql = "SELECT id, nome, email, senha_hash FROM usuarios WHERE email = '{$email}'";
$resultado = mysqli_query($conexao, $sql);

if (mysqli_num_rows($resultado) > 0) {
    $usuario = mysqli_fetch_assoc($resultado);
    
    if (password_verify($senha, $usuario['senha_hash'])) {
        $_SESSION['usuario_id'] = $usuario['id'];
        $_SESSION['usuario_nome'] = $usuario['nome'];
        $_SESSION['usuario_email'] = $usuario['email'];

        $mensagem = "Login realizado com sucesso! Bem-vindo, " . $usuario['nome'];
        $link = "index.php";
        $link_texto = "Entrar na conta";
    } else {
        $mensagem = "Senha incorreta!";
        $link = "index.php?pg=form_login";
        $link_texto = "Voltar";
    }
} else {
    $mensagem = "Usuário não encontrado!";
    $link = "index.php?pg=form_login";
    $link_texto = "Voltar";
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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

        .btn-custom {
            width: 100%;
            margin-top: 15px;
        }

        @keyframes slideUp {
            0% { transform: translateY(50px); opacity: 0; }
            100% { transform: translateY(0); opacity: 1; }
        }
    </style>
</head>
<body>

<div class="container text-center" style="margin-top: 150px; margin-bottom: 150px;">
    <div class="message-card mx-auto col-md-6">
        <h2 class="mb-4"><?= $mensagem ?></h2>
        <a href="<?= $link ?>" class="btn btn-secondary btn-custom"><?= $link_texto ?></a>
    </div>
</div>

</body>
</html>
