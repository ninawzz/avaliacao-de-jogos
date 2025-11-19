<?php
    require_once "admin/config.inc.php";
    $id = $_REQUEST['id'];
    $sql = "SELECT * FROM avaliacoes WHERE id = $id";
    $resultado = mysqli_query($conexao, $sql);

    while ($suaavaliacao = mysqli_fetch_array($resultado)){
        $id = $suaavaliacao['id'];
        $nome = $suaavaliacao['nome'];
        $avaliacao = $suaavaliacao['avaliacao'];
        $descricao = $suaavaliacao['descricao'];
    }
?>

<form action="index.php?pg=altera_avaliacao" method="post">
    <input type="hidden" name="id" value="<?=$id?>">
    <label>Nome do jogo:</label>
    <input type="text" name="nome" value="<?=$nome?>">
    <label>Avaliacao:</label>
    <input type="number" name="avaliacao" value="<?=$avaliacao?>" min="1" max="5">
    <label>Descrição:</label>
    <input type="text" name="descricao" value="<?=$descricao?>">
    <input type="submit" value="Cadastrar">
</form>