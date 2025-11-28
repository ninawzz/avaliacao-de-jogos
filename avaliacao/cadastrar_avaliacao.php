<?php

    require_once "admin/config.inc.php";
    $jogo_id = $_POST['jogo_id'];
    $nome = $_POST['nome'];
    $avaliacao = $_POST['avaliacao'];
    $descricao = $_POST['descricao'];

    $sql = "INSERT INTO avaliacoes (jogo_id, nome, avaliacao, descricao) VALUES (
        '$jogo_id', '$_POST[nome]', '$_POST[avaliacao]', '$_POST[descricao]')";

    $execute = mysqli_query($conexao, $sql);

    if ($execute) {
         $sql_media = "SELECT AVG(avaliacao) AS media 
                  FROM avaliacoes 
                  WHERE jogo_id = '$jogo_id'";
                  $resultado_media = mysqli_query($conexao, $sql_media);

        $dados = mysqli_fetch_assoc($resultado_media);
        $media = $dados['media'];

         $sql_update = "UPDATE jogos SET avaliacao = '$media' WHERE id = '$jogo_id'";
    mysqli_query($conexao, $sql_update);

        echo "<h2>Avaliação cadastrada com sucesso!</h2>";
        echo "<a href='index.php?pg=jogos'>Voltar</a>";
    }else{
        echo "<h2>Houve um erro ao cadastrar a avaliação!</h2><br>";
    }