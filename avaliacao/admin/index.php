<?php
    include_once"topo_admin.php";

    if(empty($_SERVER["QUERY_STRING"])){
       echo "<h3>Bem-vindo ao painel admin.";
    }elseif($_GET['pg']){
        $pg = $_GET['pg'];
        include_once "$pg.php";
    }else{
        echo "Página não encontrada";
    }
    
?>