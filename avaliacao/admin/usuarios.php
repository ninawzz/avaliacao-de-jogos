<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<h2 class="text-center my-4">Lista de Usuários</h2>

<?php
if (!isset($_SESSION['admin']) || $_SESSION['admin'] !== true) {
    header("Location: ../form_loginadm.php"); 
    exit();
}

require_once "config.inc.php";

$sql = "SELECT * FROM usuarios";
$resultado = mysqli_query($conexao, $sql);

if (!$resultado || mysqli_num_rows($resultado) === 0) {
    echo '<div class="container"><h3 class="text-center my-4">Nenhum usuário cadastrado!</h3></div>';
    echo '<div class="text-center"><a href="?pg=form_jogos" class="btn btn-success">Cadastrar Jogo</a></div>';
} else {
    ?>
        <div class="table-responsive">
            <table class="table table-striped table-bordered align-middle text-center">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Email</th>
                    </tr>
                </thead>

                <tbody>
                    <?php while ($dados = mysqli_fetch_array($resultado)): ?>
                    <tr>
                        <td><?= $dados['id'] ?></td>
                        <td><?= $dados['nome'] ?></td>
                        <td><?= $dados['email'] ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
<?php } ?>
</div>


