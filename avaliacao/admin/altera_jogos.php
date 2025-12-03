<?php

    require_once "config.inc.php";

    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $genero = $_POST['genero'];
    $avaliacao = $_POST['avaliacao'];
    $descricao= $_POST['descricao'];
    
    if (!empty($_FILES['imagem']['name'])) {
        $imagem = $_FILES['imagem']['name'];
        $tmp = $_FILES['imagem']['tmp_name'];
        move_uploaded_file($tmp, "../imagem_jogos/" . $imagem);
    } else {
        $imagem = $_POST['imagem_atual']; // mantém a existente
    }

    $sql = "UPDATE jogos SET
            nome = '$nome',
            genero = '$genero',
            avaliacao = '$avaliacao',
            descricao = '$descricao',
            imagem = '$imagem'
            WHERE id = '$id'";

    $resultado = mysqli_query($conexao, $sql);

    if($resultado){
        echo '<div class="container"><h2 class="text-center my-4">Jogo alterado com sucesso!</h2></div>';
        echo '<div class="text-center"><a href="index.php?pg=admin_jogos" class="btn btn-warning">Voltar</a></div>';
        echo '<br>';
        echo '<br>';
    }else{
        echo '<div class="container"><h2 class="text-center my-4">Erro ao alterar jogo!</h2></div>';
        echo '<div class="text-center"><a href="index.php?pg=admin_jogos" class="btn btn-warning">Voltar</a></div>';
        echo '<br>';
        echo '<br>';
    }