<?php

   $conexao = mysqli_connect("localhost", "root", "");

    $bd = mysqli_select_db($conexao, "avaliacao_de_jogos");

    if(!$conexao){
        echo "Conexão com banco de dados falhou!";
    }
