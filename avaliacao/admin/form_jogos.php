<form action="?pg=cadastrar_jogos" method="post">
    <label>Nome do jogo:</label>
    <input type="text" name="nome">
    <label>Genero:</label>
    <input type="text" name="genero">
    <label>Avaliação:</label>
    <input type="number" name="avaliacao" min="1" max="5">
    <label>Descrição:</label>
    <input type="text" name="descricao">
    <label>Imagem:</label>
    <input type="file" name="imagem" accept="imagens/*">
    <img id="preview" src="#" alt="preview da imagem" style="display:none; width:150px; border:1px solid #333;">
    <input type="submit" value="Cadastrar">
</form>