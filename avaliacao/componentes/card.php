<div class="bg-white" style="position: relative; text-align: center;">
<div class="container mt-3">
<link rel="stylesheet" href="style.css">

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-5 g-3 align-items-start">
        <?php while($jogos = mysqli_fetch_array($resultado)): ?>
        <div class="col">
            <div class="game-card h-100" data-id="<?= htmlspecialchars($jogos['id']) ?>">
                <div class="card-image">
                    <img src="imagem_jogos/<?=$jogos['imagem']?>" alt="Imagem do jogo" />
                </div>
                <div class="card-body">
                    <h5><?=$jogos['nome']?></h5>
                    <p><strong>Gênero:</strong> <?=$jogos['genero']?></p>
                    <div class="stars" data-rating="<?=$jogos['avaliacao']?>"></div>
                    <div class="actions">
                        <a class="btn btn-sm btn-primary" href="index.php?pg=form_avaliacao&jogo_id=<?= $jogos['id'] ?>">Avaliar</a>
                        <a class="btn btn-sm btn-primary" href="index.php?pg=detalhes_jogo_avaliacao&jogo_id=<?= $jogos['id'] ?>">Ver Detalhes</a>

                    </div>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
    </div>
</div>