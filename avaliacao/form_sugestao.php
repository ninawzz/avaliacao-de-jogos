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
<div class="container" style="margin-top: 100px; margin-bottom: 200px;">

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
                    <h2 class="card-title text-center mb-4">Enviar Sugestão de Jogo</h2>

                    <form action="index.php?pg=cadastrar_sugestao" method="post" enctype="multipart/form-data">
                        
                        <div class="mb-3">
                            <label for="nome" class="form-label">Nome do jogo:</label>
                            <input type="text" class="form-control" id="nome" name="nome" required>
                        </div>

                        <div class="mb-3">
                            <label for="genero" class="form-label">Gênero:</label>
                            <input type="text" class="form-control" id="genero" name="genero" required>
                        </div>

                        <div class="mb-3">
                            <label for="descricao" class="form-label">Descrição:</label>
                            <input type="text" class="form-control" id="descricao" name="descricao" required>
                        </div>

                        <div class="mb-3">
                            <label for="imagem" class="form-label">Imagem:</label>
                            <input type="file" class="form-control" id="imagem" name="imagem" accept="image/*" required>
                        </div>

                        <button type="submit" class="btn text-black w-100">Cadastrar</button>

                        <br><br>
                    </form>

                </div>
            </div>
        </div>
    </div>

</div>

</body>
</html>
