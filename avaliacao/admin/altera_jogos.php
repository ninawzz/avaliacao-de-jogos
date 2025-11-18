<?php

    require_once "config.inc.php";

    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $genero = $_POST['genero'];
    $avaliacao = $_POST['avalicao'];
    $descricao= $_POST['descricao'];
    $imagem = $_POST['imagem'];

    $sql = "UPDATE jogos SET
            nome = '$nome',
            genero = '$genero',
            avaliacao = '$avaliacao'
            descricao = '$descricao'
            imagem = '$imagem'
            WHERE id = '$id'";

    $resultado = mysqli_query($conexao, $sql);

    if($resultado){
        echo "Cadastro Alterado com sucesso!";
        echo "<a href='?pg=admin_jogos'>Voltar</a>";
    }else{
        echo "Houve um erro na alteração.";
        echo "<a href='?pg=admin_jogos'>Voltar</a>";
    }