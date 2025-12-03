<?php

    require_once "admin/config.inc.php";

    if ($_POST['senha_hash'] !== $_POST['confirmar_senha']) {
        echo '<div class="container"><h2 class="text-center my-4">As senhas não coincidem!</h2></div>';
        echo '<div class="text-center"><a href="index.php?pg=usuario_form" class="btn btn-secondary">Voltar</a></div>';
        exit;
    }

    $senha_hash = password_hash($_POST['senha_hash'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuarios (nome, email, senha_hash, criado_em)
            VALUES (
                '{$_POST['nome']}',
                '{$_POST['email']}',
                '$senha_hash',
                NOW()
            )";

    $execute = mysqli_query($conexao, $sql);

    if ($execute) {
        echo '<div class="container"><h2 class="text-center my-4">Usuário cadastrado com sucesso!</h2></div>';
        echo '<div class="text-center"><a href="index.php" class="btn btn-secondary">Voltar</a></div>';
        echo '<br>';
        echo '<br>';
    } else {
        echo '<div class="container"><h2 class="text-center my-4">Erro ao cadastrar usuário!</h2></div>';
        echo '<div class="text-center"><a href="index.php" class="btn btn-secondary">Voltar</a></div>';
        echo '<br>';
        echo '<br>';
    }
?>