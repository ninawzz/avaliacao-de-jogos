<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<h2 class="text-center my-4">Lista de Jogos</h2>

<?php
if (!isset($_SESSION['admin']) || $_SESSION['admin'] !== true) {
    header("Location: ../form_loginadm.php"); 
    exit();
}

require_once "config.inc.php";

$sql = "SELECT * FROM jogos";
$resultado = mysqli_query($conexao, $sql);

if (!$resultado || mysqli_num_rows($resultado) === 0) {
    echo '<div class="container"><h3 class="text-center my-4">Nenhuma jogo cadastrado!</h3></div>';
    echo '<div class="text-center"><a href="?pg=form_jogos" class="btn btn-success">Cadastrar Jogo</a></div>';
} else {
    ?>

    <div class="container">
        <div class="d-flex justify-content-end mb-3">
            <a href="?pg=form_jogos" class="btn btn-success">
                + Cadastrar Novo Jogo
            </a>
        </div>

        <div class="table-responsive">
            <table class="table table-striped table-bordered align-middle text-center">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Foto</th>
                        <th>Nome</th>
                        <th>Gênero</th>
                        <th>Avaliação</th>
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
                        <td><?= $dados['avaliacao'] ?></td>

                        <td>
                            <a href="?pg=detalhes_jogos&id=<?= $dados['id'] ?>" 
                            class="btn btn-primary btn-sm mx-1">
                            Ver
                            </a>

                            <a href="?pg=form_jogos_alterar&id=<?= $dados['id'] ?>" 
                            class="btn btn-warning btn-sm mx-1">
                            Alterar
                            </a>

                            <a href="?pg=delete_jogos&id=<?= $dados['id'] ?>"
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
<?php } ?>
</div>


