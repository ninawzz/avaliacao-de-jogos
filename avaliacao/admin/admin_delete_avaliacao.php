<?php

    require_once "config.inc.php";

    $id = $_GET['id'];

    $sql = "DELETE FROM avaliacoes WHERE id = '$id'";
    $resultado = mysqli_query($conexao, $sql);

    if($resultado){
        echo '<div class="container"><h2 class="text-center my-4">Avaliação excluída com sucesso!</h2></div>';
        echo '<div class="text-center"><a href="index.php?pg=avaliacao_usuarios" class="btn btn-danger">Voltar</a></div>';
        echo '<br>';
        echo '<br>';
    }else{
        echo '<div class="container"><h2 class="text-center my-4">Erro ao excluir avaliação!</h2></div>';
        echo '<div class="text-center"><a href="index.php?pg=avaliacao_usuarios" class="btn btn-danger">Voltar</a></div>';
        echo '<br>';
        echo '<br>';
    }