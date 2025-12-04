<?php
if (!isset($_SESSION['admin']) || $_SESSION['admin'] !== true) {
    header("Location: ../form_loginadm.php"); 
    exit();
}
    require_once "config.inc.php";

    $id = $_GET['id'];

    $sql = "DELETE FROM jogos WHERE id = '$id'";
    $resultado = mysqli_query($conexao, $sql);

    if($resultado){
        echo '<div class="container"><h2 class="text-center my-4">Jogo excluído com sucesso!</h2></div>';
        echo '<div class="text-center"><a href="index.php?pg=admin_jogos" class="btn btn-danger">Voltar</a></div>';
    }else{
        echo '<div class="container"><h2 class="text-center my-4">Erro ao excluir jogo!</h2></div>';
        echo '<div class="text-center"><a href="index.php?pg=admin_jogos" class="btn btn-danger">Voltar</a></div>';
    }