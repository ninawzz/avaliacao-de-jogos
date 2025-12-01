<?php

    require_once "config.inc.php";

    $id = $_GET['id'];

    $sql = "DELETE FROM sugestoes WHERE id = '$id'";
    $resultado = mysqli_query($conexao, $sql);

    if($resultado){
        echo "<h2>Jogo excluído com sucesso!</h2>";
        echo "<a href='?pg=admin_jogos'>Voltar</a>";
    }else{
        echo "<h2>Erro ao excluir o jogo!</h2>";
        echo "<a href='?pg=admin_jogos'>Voltar</a>";
    }