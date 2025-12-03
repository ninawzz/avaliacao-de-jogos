<?php
    include_once"topo_admin.php";

    if(empty($_SERVER["QUERY_STRING"])){
       echo "<div class='container'><h3 class='text-center my-4'>Bem-vindo ao painel admin!</h3></div>";
    }elseif($_GET['pg']){
        $pg = $_GET['pg'];
        include_once "$pg.php";
    }else{
        echo "Página não encontrada";
    }
    
?>