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

        echo '<div class="container"><h2 class="text-center my-4">Avaliação cadastrada com sucesso!</h2></div>';
        echo '<div class="text-center"><a href="index.php?pg=jogos" class="btn btn-success">Voltar</a></div>';
        echo '<br>';
        echo '<br>';
    }else{
        echo '<div class="container"><h2 class="text-center my-4">Erro ao cadastradar avaliação!</h2></div>';
        echo '<div class="text-center"><a href="index.php?pg=jogos" class="btn btn-success">Voltar</a></div>';
        echo '<br>';
        echo '<br>';
    }