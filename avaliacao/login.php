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

            echo '<div class="container"><h2 class="text-center my-4">Login realizado com sucesso! Bem-vindo, ' . ($usuario['nome']) . '</h2></div>';
            echo '<div class="text-center"><a href="index.php" class="btn btn-secondary">Entrar na conta</a></div>';
            echo '<br>';
            echo '<br>';
        } else {
            echo '<div class="container"><h2 class="text-center my-4">Senha incorreta!</h2></div>';
            echo '<div class="text-center"><a href="index.php?pg=form_login" class="btn btn-secondary">Voltar</a></div>';
            echo '<br>';
            echo '<br>';
        }
    } else {
        echo '<div class="container"><h2 class="text-center my-4">Usuário não encontrado!</h2></div>';
        echo '<div class="text-center"><a href="index.php?pg=form_login" class="btn btn-secondary">Voltar</a></div>';
        echo '<br>';
        echo '<br>';
    }
?>