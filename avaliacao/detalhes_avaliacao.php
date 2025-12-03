<?php
require_once "admin/config.inc.php";


$id = $_GET['id'];

if (!$id) {
    echo "ID inválido";
    exit;
}


$stmt = $stmt = mysqli_prepare($conexao, 
    "SELECT a.avaliacao, a.descricao, u.nome AS usuario_nome
     FROM avaliacoes a
     LEFT JOIN usuarios u ON u.id = a.usuario_id
     WHERE a.id = ?");
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if (!$result || mysqli_num_rows($result) === 0) {
    echo "Jogo não encontrado.";
    exit;
}

$row = mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <title>Detalhes - <?= ($row['usuario_nome']) ?></title>
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
        <h1>Detalhes da Avaliação</h1>
        <div class="top">
            <div class="info">
                <div class="field"><span class="label">Nome do avaliador:</span> <?= ($row['usuario_nome']) ?></div>
                <div class="field"><span class="label">Avaliação:</span> <?= ($row['avaliacao']) ?></div>

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
                                echo '<p>' . nl2br(($p)) . '</p>';
                            }
                        }
                    ?>
                </div>       
            </div>
        </div>
        <br>
        <p><a href='?pg=suasavaliacoes' class="btn btn-primary w-100">Voltar</a></p>
    </div>
</div>
</body>
</html>