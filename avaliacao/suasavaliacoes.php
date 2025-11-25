<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<h2 class="text-center my-4">Lista de Avaliações</h2>

<?php
    require_once "admin/config.inc.php";

    $sql = "SELECT * FROM avaliacoes";
    $resultado = mysqli_query($conexao, $sql);

    $sql1 = "SELECT * FROM jogos";
    $resultado1 = mysqli_query($conexao, $sql1);

?>
<div class="container">
    <div class="table-responsive">
        <table class="table table-striped table-bordered align-middle text-center">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Foto</th>
                    <th>Nome do Avaliador</th>
                    <th>Nota</th>
                    <th>Descrição</th>
                    <th style="width: 220px;">Ações</th>
                </tr>
            </thead>

            <tbody>
                <?php while ($dados = mysqli_fetch_array($resultado) and $dados1 = mysqli_fetch_array($resultado1)): ?>
                <tr>
                    <td><?= $dados['id'] ?></td>

                    <td>
                        <img src="imagem_jogos/<?= $dados1['imagem'] ?>" 
                                width="90" height="90" 
                                style="object-fit:cover; border-radius:8px;">
                    </td>

                    <td><?= $dados['nome'] ?></td>
                    <td><?= $dados['avaliacao'] ?></td>
                    <td><?= $dados['descricao'] ?></td>

                    <td>
                        <a href="index.php?pg=form_avaliacoes_alterar&id=<?= $dados['id'] ?>" 
                            class="btn btn-warning btn-sm mx-1">
                            Alterar
                        </a>

                        <a href="index.php?pg=delete_avaliacao&id=<?= $dados['id'] ?>"
                            class="btn btn-danger btn-sm mx-1"
                            onclick="return confirm('Tem certeza que deseja excluir este jogo?')">
                            Excluir
                        </a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</div>