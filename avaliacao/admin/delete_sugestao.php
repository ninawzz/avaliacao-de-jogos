<?php

    require_once "config.inc.php";

    $id = $_GET['id'];

    $sql = "DELETE FROM sugestoes WHERE id = '$id'";
    $resultado = mysqli_query($conexao, $sql);

    if($resultado){
        echo '<div class="container"><h2 class="text-center my-4">Sugestão excluída com sucesso!</h2></div>';
        echo '<div class="text-center"><a href="index.php?pg=sugestao_usuario" class="btn btn-danger">Voltar</a></div>';
    }else{
        echo '<div class="container"><h2 class="text-center my-4">Erro ao excluir sugestão!</h2></div>';
        echo '<div class="text-center"><a href="index.php?pg=sugestao_usuario" class="btn btn-danger">Voltar</a></div>';
    }