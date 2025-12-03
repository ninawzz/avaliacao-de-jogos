<?php
require_once __DIR__ . '/componentes/topo.php';
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<h2 class="text-center my-4">Lista de Avaliações</h2>

<?php
    require_once __DIR__ . '/admin/config.inc.php';

    $sql = "SELECT a.*, j.nome AS jogo_nome, j.imagem AS jogo_imagem, u.nome AS usuario_nome
            FROM avaliacoes a
            LEFT JOIN jogos j ON a.jogo_id = j.id
            LEFT JOIN usuarios u ON a.usuario_id = u.id";

    $resultado = mysqli_query($conexao, $sql);

if (!$resultado || mysqli_num_rows($resultado) === 0) {
    echo '<div class="container"><h3 class="text-center my-4">Nenhuma avaliação cadastrada!</h3></div>';
} else {
    ?>
    <div class="container">
        <div class="table-responsive">
            <table class="table table-striped table-bordered align-middle text-center">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Foto do Jogo</th>
                        <th>Nome de Jogo</th>
                        <th>Nome do Avaliador</th>
                        <th>Nota</th>
                        <th style="width: 220px;">Ações</th>
                    </tr>
                </thead>

                <tbody>
                    <?php while ($dados = mysqli_fetch_assoc($resultado)): ?>
                    <tr>
                        <td><?= $dados['id'] ?></td>

                        <td>
                            <?php
                                $img = $dados['jogo_imagem'] ?? '';
                                $imgPath = __DIR__ . '/imagem_jogos/' . $img;
                                if (!empty($img) && file_exists($imgPath)): ?>
                                    <img src="imagem_jogos/<?= ($img) ?>"
                                         width="90" height="90" style="object-fit:cover; border-radius:8px;">
                                <?php else: ?>
                                    <div style="width:90px;height:90px;border:1px solid #ddd;display:flex;align-items:center;justify-content:center;color:#888;">
                                        sem imagem
                                    </div>
                                <?php endif; ?>
                        </td>

                        <td><?= $dados['jogo_nome'] ?></td>
                        <td><?= $dados['usuario_nome'] ?></td>
                        <td><?= $dados['avaliacao'] ?></td>

                            <td>
                                <a href="index.php?pg=detalhes_avaliacao&id=<?= urlencode($dados['id']) ?>"
                                   class="btn btn-primary btn-sm mx-1">Ver</a>

                                <a href="index.php?pg=form_avaliacoes_alterar&id=<?= urlencode($dados['id']) ?>"
                                   class="btn btn-warning btn-sm mx-1">Alterar</a>

                                <a href="index.php?pg=delete_avaliacao&id=<?= urlencode($dados['id']) ?>"
                                   class="btn btn-danger btn-sm mx-1"
                                   onclick="return confirm('Tem certeza que deseja excluir essa avaliação?')">Excluir</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
    <br>
<?php
}
require_once __DIR__ . '/componentes/rodape.php';
?>