<?php

    require_once "config.inc.php";

    $sql = "INSERT INTO  jogos (nome, genero, avaliacao, descricao, imagem)VALUES (
            '$_POST[nome]','$_POST[genero]','$_POST[avaliacao]','$_POST[descricao]','$_POST[imagem]')";

    $execute = mysqli_query($conexao, $sql);

    if ($execute) {
        echo "<br><h2>Jogo cadastrado com sucesso!</h2><br>";
        echo "<a href='?pg=admin_jogos'>Voltar</a>";
    }else{
        echo "<h2>Houve um erro ao cadastrar o jogo!</h2><br>";
    }