<?php

    require_once "admin/config.inc.php";

    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $avaliacao = $_POST['avaliacao'];
    $descricao= $_POST['descricao'];

    $sql = "UPDATE avaliacoes SET
            nome = '$nome',
            avaliacao = '$avaliacao',
            descricao = '$descricao'
            WHERE id = '$id'";

    $resultado = mysqli_query($conexao, $sql);

    if($resultado){
        echo '<div class="container"><h2 class="text-center my-4">Avaliação alterada com sucesso!</h2></div>';
        echo '<div class="text-center"><a href="index.php?pg=suasavaliacoes" class="btn btn-warning">Voltar</a></div>';
        echo '<br>';
        echo '<br>';
    }else{
        echo '<div class="container"><h2 class="text-center my-4">Erro ao alterar avaliação!</h2></div>';
        echo '<div class="text-center"><a href="index.php?pg=suasavaliacoes" class="btn btn-warning">Voltar</a></div>';
        echo '<br>';
        echo '<br>';
    }