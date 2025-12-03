<?php
require_once "admin/config.inc.php";

$id = $_GET['jogo_id'];
if (!$id) {
    echo "ID inválido";
    exit;
}
$stmt = mysqli_prepare($conexao, "SELECT id, nome, genero, avaliacao, descricao, imagem FROM jogos WHERE id = ?");
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if (!$result || mysqli_num_rows($result) === 0) {
    echo "Jogo não encontrado.";
    exit;
}

$row = mysqli_fetch_assoc($result);

$imgUrl = "imagem_jogos/" . ($row['imagem'] ?? "");
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="/jogos/avaliacao-de-jogos/avaliacao/style.css">
    <style>
body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
}

.container {
    max-width: 1200px;
    margin: 1px 2px 3px auto;
    padding: 85px;
    border-radius: 22px;
    background: rgba(0, 0, 0, 0.55);
    color: #fff;
    backdrop-filter: blur(6px);

    position: absolute;
    top: 49%;
    left: 50%;
    transform: translate(-55%, -40%);
}

.top {
    display: flex;
    gap: 60px;
    align-items: flex-start;
}


.img-box {
    width: 400px;
    height: 400px;
    border-radius: 30px;
    overflow: hidden;
    flex-shrink: 0;
}

.img-box img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.info {
    flex: 1;
}


.label {
    font-weight: bold;
    color: #fff;
    font-size: 26px;
}

.field {
    margin-bottom: 14px;
    font-size: 26px;
    color: #fff;
}

.desc p {
    margin-bottom: 12px;
    line-height: 1.5;
    color: #f2f2f2;
    font-size: 23px;
}

.detalhe img {
    width: 100%;
    display: block;
}


@media(max-width: 768px){
    .top {
        flex-direction: column;
        align-items: center;
        text-align: center;
    }
    .img-box {
        width: 260px;
        height: 260px;
    }
    .container {
        padding: 35px;
        max-width: 90%;
    }
}
</style>
</head>
<body>

<div class="detalhe">
    <img src="imagens/detalhe.png" alt="">
    
    <div class="container">

        <a href="index.php?pg=jogos">
            <img src="imagens/arco.png" style="width:40px; margin-left:-170px; margin-top:-203px; position:absolute;">
        </a> 

        <a href="index.php?pg=jogos">
            <h1 style="margin-left:-110px; margin-top:-200px; position:absolute; text-align:center; margin-bottom:15px; font-size:26px; color:#fff;">
                Detalhes do Jogo
            </h1>
        </a>


        <div class="top">
            <div class="img-box">
                <?php if (!empty($row['imagem']) && file_exists(__DIR__ . "/imagem_jogos/" . $row['imagem'])): ?>
                    <img src="<?= htmlspecialchars($imgUrl) ?>" alt="<?= htmlspecialchars($row['nome']) ?>">
                <?php else: ?>
                    <div style="width:100%;height:100%;display:flex;align-items:center;justify-content:center;color:#ccc;">
                        sem imagem
                    </div>
                <?php endif; ?>
            </div>

            <div class="info">
                <div class="field"><span class="label">Nome:</span> <?= htmlspecialchars($row['nome']) ?></div>
                <div class="field"><span class="label">Gênero:</span> <?= htmlspecialchars($row['genero']) ?></div>
                <div class="field"><span class="label">Avaliação:</span> <?= htmlspecialchars($row['avaliacao']) ?></div>

                <div class="desc">
                    <div class="label">Descrição:</div>
                    <?php
                        $raw = trim($row['descricao'] ?? '');
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
    </div>
</div>
