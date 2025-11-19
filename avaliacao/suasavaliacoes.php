<h2>Lista de Avaliações</h2>
<?php

    require_once "admin/config.inc.php";

    $sql = "SELECT * FROM avaliacoes ";

    $resultado = mysqli_query($conexao, $sql);

    $sql1 = "SELECT * FROM jogos ";

    $resultado1 = mysqli_query($conexao, $sql1);

    if (mysqli_num_rows($resultado) > 0) {
        while($dados = mysqli_fetch_array($resultado) and  $dados1 = mysqli_fetch_array($resultado1)) {

            echo "<br>===============<br>";
            echo "Nome do Jogo: $dados1[nome] | ";
            echo "Nome do avaliador: $dados[nome] | ";
            echo "Avaliação: $dados[avaliacao] | ";
            echo "Descrição: $dados[descricao] | ";
            echo " | <a href='index.php?pg=form_avaliacoes_alterar&id=$dados[id]'>Alterar</a>";
            echo " | <a href='index.php?pg=delete_avaliacao&id=$dados[id]'>Excluir</a>";
            echo "<br>===============<br>";
        }
    }else{
        echo "<br><h2>Nenhuma avaliação encontrada!</h2><br>";
    }
?>