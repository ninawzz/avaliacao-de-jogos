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
        echo "<h2>Avaliação alterada com sucesso!</h2>";
        echo "<a href='index.php?pg=jogos'>Voltar</a>";
    }else{
        echo "<h2>Houve um erro na alteração.</h2>";
        echo "<a href='index.php?pg=jogos'>Voltar</a>";
    }