<?php
    require_once "config.inc.php";
    $id = $_REQUEST['id'];
    $sql = "SELECT * FROM jogos WHERE id = $id";
    $resultado = mysqli_query($conexao, $sql);

    while ($jogos = mysqli_fetch_array($resultado)){
        $id = $jogos['id'];
        $nome = $jogos['nome'];
        $genero = $jogos['genero'];
        $avaliacao = $jogos['avaliacao'];
        $descricao = $jogos['descricao'];
        $imagem = $jogos['imagem'];
    }
?>

<form action="?pg=altera_jogos" method="post">
    <input type="hidden" name="id" value="<?=$id?>">
    <label>Nome do jogo:</label>
    <input type="text" name="nome" value="<?=$nome?>">
    <label>Genero:</label>
    <input type="text" name="genero" value="<?=$genero?>">
    <label>Avaliacao:</label>
    <input type="number" name="avaliacao" value="<?=$avaliacao?>" min="1" max="5">
    <label>Descrição:</label>
    <input type="text" name="descricao" value="<?=$descricao?>">
    <label>Imagem:</label>
    <input type="file" name="imagem" accept="imagens/*" value="<?=$imagem?>">
    <input type="submit" value="Cadastrar">
</form>