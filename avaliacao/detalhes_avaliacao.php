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

    <link rel="stylesheet" href="style.css">

    <style>
        body {
            background: linear-gradient(to bottom, #6fb5e4ff, #0c5eaaff, #000000ff);
            color: #ffffff;
            min-height: 100vh;
        }

        h1, .label {
            color: #ffffff;
        }
        
    </style>
</head>
<body>

<div class="container" style="margin-top: 160px; margin-bottom: 180px;">
    
    <div class="row justify-content-center">
        <div class="col-md-8">
            
            <div class="card p-4">
                <h1 class="text-center mb-4">Detalhes da Avaliação</h1>

                <div class="mb-3">
                    <span class="label">Nome do avaliador:</span>
                    <?= $row['usuario_nome'] ?>
                </div>

                <div class="mb-3">
                    <span class="label">Avaliação:</span>
                    <?= $row['avaliacao'] ?>
                </div>

                <div class="mb-3">
                    <span class="label">Descrição:</span>
                    <div style="line-height: 1.5;">
                        <?php
                            $raw = $row['descricao'] ?? '';
                            $raw = trim($raw);
                            if ($raw === '') {
                                echo '<p><em>sem descrição</em></p>';
                            } else {
                                $paragraphs = preg_split('/\r?\n{2,}/', $raw);
                                foreach ($paragraphs as $p) {
                                    echo '<p>' . nl2br($p) . '</p>';
                                }
                            }
                        ?>
                    </div>
                </div>

                <a href="index.php?pg=jogos" class="btn w-100 mt-3">Voltar</a>

            </div>
        </div>
    </div>

</div>

</body>
</html>