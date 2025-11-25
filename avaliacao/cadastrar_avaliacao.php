<?php

    require_once "admin/config.inc.php";

    $sql = "INSERT INTO  avaliacoes (nome, avaliacao, descricao)VALUES (
            '$_POST[nome]','$_POST[avaliacao]','$_POST[descricao]')";

    $execute = mysqli_query($conexao, $sql);

    if ($execute) {
        echo "<h2>Avaliação cadastrada com sucesso!</h2>";
        echo "<a href='index.php?pg=jogos'>Voltar</a>";
    }else{
        echo "<h2>Houve um erro ao cadastrar a avaliação!</h2><br>";
    }