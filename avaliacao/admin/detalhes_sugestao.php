<?php
require_once "config.inc.php";

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    echo "ID inválido.";
    exit;
}
$id = (int) $_GET['id'];

$stmt = mysqli_prepare($conexao, "SELECT id, nome, genero, descricao, imagem FROM sugestoes WHERE id = ?");
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if (!$result || mysqli_num_rows($result) === 0) {
    echo "Jogo não encontrado.";
    exit;
}

$row = mysqli_fetch_assoc($result);

$imgUrl = "../imagem_jogos/" . ($row['imagem'] ?? "");
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <title>Detalhes - <?= htmlspecialchars($row['nome']) ?></title>
    <style>
        .container { max-width:800px; margin:20px auto; font-family:Arial, sans-serif; }
        .card { border:1px solid #ccc; padding:16px; border-radius:6px; }
        .top { display:flex; gap:20px; align-items:flex-start; }
        .img-box { flex:0 0 300px; }
        .img-box img { max-width:100%; height:auto; display:block; }
        .info { flex:1; }
        .field { margin-bottom:8px; }
        .label { font-weight:bold; color:#333; }
        .desc { margin-top:8px; white-space:normal; overflow-wrap:anywhere; word-break:break-word; hyphens:auto; line-height:1.45; }
        .desc .label { display:block; margin-bottom:4px; }
        .desc p { margin:4px 0; }
        a { color:#06c; text-decoration:none; }
    </style>
</head>
<body>
<div class="container">
    <div class="card">
        <h1>Detalhes do Jogo</h1>
        <div class="top">
            <div class="img-box">
                <?php if (!empty($row['imagem']) && file_exists(__DIR__ . "/../imagem_jogos/" . $row['imagem'])): ?>
                    <img src="<?= htmlspecialchars($imgUrl) ?>" alt="<?= htmlspecialchars($row['nome']) ?>">
                <?php else: ?>
                    <div style="width:100%;height:200px;border:1px solid #ddd;display:flex;align-items:center;justify-content:center;color:#888;">
                        sem imagem
                    </div>
                <?php endif; ?>
            </div>

            <div class="info">
                <div class="field"><span class="label">Nome:</span> <?= htmlspecialchars($row['nome']) ?></div>
                <div class="field"><span class="label">Gênero:</span> <?= htmlspecialchars($row['genero']) ?></div>

                <div class="desc">
                    <div class="label">Descrição:</div>
                    <?php
                        $raw = $row['descricao'] ?? '';
                        $raw = trim($raw);
                        if ($raw === '') {
                            echo '<p><em>sem descrição</em></p>';
                        } else {
                            $paragraphs = preg_split('/\r?\n{2,}/', $raw);
                            foreach ($paragraphs as $p) {
                                echo '<p>' . nl2br(htmlspecialchars($p)) . '</p>';
                            }
                        }
                    ?>
                </div>       
            </div>
        </div>
        <br>
        <p><a href='?pg=sugestao_usuario' class="btn btn-primary w-100">Voltar</a></p>
    </div>
</div>
</body>
</html>