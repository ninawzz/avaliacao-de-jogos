<head>
    <title>Game Boxe</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="componentes/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div style="position: relative; text-align: center;">
<div class="container mt-3">

    <div class="row row-cols-1 col mb-5 row-cols-sm-4 row-cols-md-4 align-items-start">
        <?php while($jogos = mysqli_fetch_array($resultado)): ?>
        <div class="col mb-4">
            <div class="game-card h-150" data-id="<?= htmlspecialchars($jogos['id']) ?>">
                <div class="card-image">
                    <img src="imagem_jogos/<?=$jogos['imagem']?>" alt="Imagem do jogo" />
                </div>
                <div class="card-body">
                    <h5><?=$jogos['nome']?></h5>
                    <p><?=$jogos['genero']?></p>
                    <div class="stars" data-rating="<?=$jogos['avaliacao']?>"></div>
                    <div class="actions col mb-4">
                        <a class="btn btn-sm btn-primary" href="index.php?pg=form_avaliacao&jogo_id=<?= $jogos['id'] ?>">Avaliar</a>
                        <a class="btn btn-sm btn-primary" href="index.php?pg=detalhes_jogo_avaliacao&jogo_id=<?= $jogos['id'] ?>">Detalhes</a>
                    </div>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
    </div>
</div>
