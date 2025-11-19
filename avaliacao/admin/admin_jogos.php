<p>
    <a href="?pg=form_jogos">Cadastrar novo jogo</a>
</p>

<h2>Lista de Jogos</h2>
<?php

    require_once "config.inc.php";

    $sql = "SELECT * FROM jogos ";

    $resultado = mysqli_query($conexao, $sql);

    if (mysqli_num_rows($resultado) > 0) {
        while($dados = mysqli_fetch_array($resultado)) {

            echo "<br>===============<br>";
            echo "Id do Jogo: $dados[id] | ";
            echo "Nome: $dados[nome] | ";
            echo "Genero: $dados[genero] | ";
            echo "Avaliação: $dados[avaliacao] | ";
            echo "Descrição: $dados[descricao] | ";
            echo "Imagem: <img src='imagens/$dados[imagem]' width='120'> ";
            echo " | <a href='?pg=form_jogos_alterar&id=$dados[id]'>Alterar</a>";
            echo " | <a href='?pg=delete_jogos&id=$dados[id]'>Excluir</a>";
            echo "<br>===============<br>";
        }
    }else{
        echo "<br><h2>Nenhum jogo encontrado!</h2><br>";
    }
?>
