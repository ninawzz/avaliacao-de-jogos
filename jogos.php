<?php

    require_once "admin/config.inc.php";
    $sql = "SELECT * FROM jogos";
    $resultado = mysqli_query($conexao, $sql);

?>
<div class="container mt-3">
    <h2>Lista de jogos presentes no nosso banco</h2>
    <p>Detalhes de alguns jogos</p>
    <table class="table table-dark table-hover">
        <thead>
        <tr>
            <th>Nome</th>
            <th>Genero</th>
            <th>Avaliação</th>
            <th>Descrição</th>
            <th>Imgaem</th>
        </tr>
        </thead>
        <tbody>
        <?php
            while($jogos = mysqli_fetch_array($resultado)){
        ?>
        <tr>
            <td><?=$jogos['nome']?></td>
            <td><?=$jogos['genero']?></td>
            <td><?=$jogos['avaliacao']?></td>
            <td><?=$jogos['descricao']?></td>
            <td><?=$jogos['imagem']?></td>
        </tr>
        <?php
            }
        ?>
        </tbody>
    </table>
</div>