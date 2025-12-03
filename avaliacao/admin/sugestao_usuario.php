<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<h2 class="text-center my-4">Lista de Sugestões</h2>

<?php
require_once "config.inc.php";

$sql = "SELECT * FROM sugestoes";
$resultado = mysqli_query($conexao, $sql);

if (!$resultado || mysqli_num_rows($resultado) === 0) {
    echo '<div class="container"><h3 class="text-center my-4">Nenhuma sugestão cadastrada!</h3></div>';
} else {
    ?>
    <div class="container">
        <div class="table-responsive">
            <table class="table table-striped table-bordered align-middle text-center">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Foto</th>
                        <th>Nome</th>
                        <th>Gênero</th>
                        <th style="width: 220px;">Ações</th>
                    </tr>
                </thead>

                <tbody>
                    <?php while ($dados = mysqli_fetch_array($resultado)): ?>
                    <tr>
                        <td><?= $dados['id'] ?></td>

                        <td>
                            <img src="../imagem_jogos/<?= $dados['imagem'] ?>" 
                                width="90" height="90" 
                                style="object-fit:cover; border-radius:8px;">
                        </td>

                        <td><?= $dados['nome'] ?></td>
                        <td><?= $dados['genero'] ?></td>
                        <td>
                            <a href="?pg=detalhes_sugestao&id=<?= $dados['id'] ?>" 
                            class="btn btn-primary btn-sm mx-1">
                            Ver
                            </a>
                            <a href="?pg=delete_sugestao&id=<?= $dados['id'] ?>"
                            class="btn btn-danger btn-sm mx-1"
                            onclick="return confirm('Tem certeza que deseja excluir esta sugestão?')">
                            Excluir
                            </a>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
<?php } ?>    