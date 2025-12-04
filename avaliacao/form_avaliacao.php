<?php $jogo_id = $_GET['jogo_id']; ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        body {
            background: linear-gradient(to bottom, #6fb5e4ff, #0c5eaaff, #000000ff);
            color: #ffffff; 
            min-height: 100vh;
        }
    </style>
</head>

<body>

<div class="container" style="margin-top: 200px; margin-bottom: 200px;">
    
        <a href="index.php?pg=jogos">
            <h1 style="margin-left:400px; margin-top:12px; position:absolute; text-align:center; margin-bottom:20px; font-size:20px; color:#fff;">
        Voltar
            </h1>
        </a>
        <a href="index.php?pg=jogos"><img src="imagens/arco.png" style="width:40px; margin-left:355px; margin-top:5px; position:absolute;"></a> 

        <div class="row justify-content-center p-5" style="margin-top:100px;">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-body">
                    <h2 class="card-title text-center mb-4">Cadastrar Avaliação</h2>
                    <form action="index.php?pg=cadastrar_avaliacao" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="jogo_id" value="<?= $jogo_id ?>">
                            <div class="mb-3">
                                <label for="avaliacao" class="form-label">Avaliação:</label>
                                <input type="number" class="form-control" id="avaliacao" name="avaliacao" max="5" value="0">
                            </div>
                            <div class="mb-3">
                                <label for="descricao" class="form-label">Descrição da avaliação:</label>
                                <input type="text" class="form-control" id="descricao" name="descricao" required>
                            </div>
                            <button type="submit" class="btn text-white w-100">Cadastrar</button>
                            <br>
                            <br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>

    </div>