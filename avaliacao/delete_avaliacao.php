<?php
require_once "admin/config.inc.php";

$id = $_GET['id'];

$sql = "DELETE FROM avaliacoes WHERE id = '$id'";
$resultado = mysqli_query($conexao, $sql);
?>

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

<div class="container text-center" style="margin-top: 200px; margin-bottom: 200px;">

    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow p-4">
                <div class="card-body">

                    <?php if($resultado){ ?>
                        <h2 class="card-title mb-4">Avaliação excluída com sucesso!</h2>
                    <?php } else { ?>
                        <h2 class="card-title mb-4">Erro ao excluir avaliação!</h2>
                    <?php } ?>

                    <a href="index.php?pg=suasavaliacoes" class="btn w-100">
                        Voltar
                    </a>

                </div>
            </div>

        </div>
    </div>

</div>

</body>
</html>
