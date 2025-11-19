<?php

    include_once "topo.php";

    // Conteúdo
    if(empty($_SERVER["QUERY_STRING"])){
        $var = "conteudo";
        include_once "$var.php";
    }elseif($_GET['pg']){
        $pg = $_GET['pg'];
        include_once "$pg.php";
    }else{
        echo "Página não encontrada";
    }

    include_once "rodape.php";