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
        echo "Avaliação alterada com sucesso!";
        echo "<a href='index.php?pg=jogos'>Voltar</a>";
    }else{
        echo "Houve um erro na alteração.";
        echo "<a href='index.php?pg=jogos'>Voltar</a>";
    }