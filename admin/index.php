<?php
require_once "../conexao.php";

// Consulta
$sql = "SELECT * FROM jogos";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Lista de Jogos</title>
</head>
<body>

<h1>Lista de Jogos</h1>

<a href="cadastrar_jogos.php">Cadastrar Novo Jogo</a>
<br><br>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Gênero</th>
        <th>Ano</th>
        <th>Ações</th>
    </tr>

    <?php
    if ($result && $result->num_rows > 0) {
        while ($linha = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>".$linha['id']."</td>";
            echo "<td>".$linha['nome']."</td>";
            echo "<td>".$linha['genero']."</td>";
            echo "<td>".$linha['ano']."</td>";
            echo "<td>
                    <a href='form_jogos.alterar.php?id=".$linha['id']."'>Editar</a>
                    |
                    <a href='delete_jogos.php?id=".$linha['id']."'>Excluir</a>
                  </td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='5'>Nenhum jogo encontrado.</td></tr>";
    }
    ?>
</table>

</body>
</html>

