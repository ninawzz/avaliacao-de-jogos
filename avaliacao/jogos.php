<?php

    require_once "admin/config.inc.php";
    $sql = "SELECT * FROM jogos";
    $resultado = mysqli_query($conexao, $sql);

?>
<div class="container mt-3">
    <h2>Lista de jogos presentes no nosso banco</h2>
    <p>Detalhes de alguns jogos</p>

    <style>
        /* Estilos locais para os cards (inspirados em teste.php) */
        .game-card {
            border: 2px solid #222;
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 8px 20px rgba(0,0,0,0.08);
            display: flex;
            flex-direction: column;
            height: 100%;
        }
        .game-card .card-image {
            background: #fafafa;
            display: grid;
            place-items: center;
            min-height: 140px;
            color: #555;
            font-size: 0.95rem;
        }
        .game-card .card-body {
            padding: 12px;
            display: flex;
            flex-direction: column;
            gap: 8px;
            flex: 1 1 auto;
        }
        .game-card h5 { margin: 0; font-size: 1.05rem; }
        .game-card p { margin: 0; color: #444; 
            font-size: 0.95rem; }
        .game-card .actions { margin-top: auto; display:flex; gap:8px; }
    </style>

    <!-- Usando row-cols para garantir 1/2/3 colunas responsivas e alinhamento à esquerda -->
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4 align-items-start">
        <?php
            while($jogos = mysqli_fetch_array($resultado)){
        ?>
        <div class="col">
            <div class="game-card h-100">
                <div class="card-image">
                    <!-- coloque aqui uma <img> se tiver o caminho da imagem -->
                    imagem
                </div>
                <div class="card-body">
                    <h5><?=$jogos['nome']?></h5>
                    <p><strong>Gênero:</strong> <?=$jogos['genero']?></p>
                    <p><?=$jogos['descricao']?></p>
                    <p><strong>Média:</strong> <?=$jogos['avaliacao']?></p>
                    <div class="actions">
                        <a class="btn btn-sm btn-primary" href="avaliacao.php">Avaliar</a>
                        <a class="btn btn-sm btn-secondary" href="suasavaliacoes.php">Ver a sua avaliação</a>
                    </div>
                </div>
            </div>
        </div>
        <?php
            }
        ?>
    </div>
</div>