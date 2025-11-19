<?php

    require_once "admin/config.inc.php";

    $id = $_GET['id'];

    $sql = "DELETE FROM avaliacoes WHERE id = '$id'";
    $resultado = mysqli_query($conexao, $sql);

    if($resultado){
        echo "<h2>Avaliação excluída com sucesso!</h2>";
        echo "<a href='index.php?pg=jogos'>Voltar</a>";
    }else{
        echo "<h2>Erro ao excluir a avaliação!</h2>";
        echo "<a href='index.php?pg=jogos'>Voltar</a>";
    }