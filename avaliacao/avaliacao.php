<form action="index.php?pg=suaavaliacao" method="post">
    <label>Nome do Usuário:</label>
    <input type="text" name="nome">
    <label>Avaliação:</label>
    <input type="number" name="avaliacao" min="1" max="5">
    <label>Descrição:</label>
    <input type="text" name="descricao">
    <input type="submit" value="Avaliar">
</form>