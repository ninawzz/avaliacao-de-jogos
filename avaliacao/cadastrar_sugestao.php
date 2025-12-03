<?php
require_once "admin/config.inc.php";

$pasta = __DIR__ . "/imagem_jogos/";

// cria a pasta se não existir
if (!is_dir($pasta)) {
    mkdir($pasta, 0755, true);
}

$mensagem = "";
$erro = false;

// Se enviou o formulário
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nomeImagem = "";

    // Verifica se uma imagem foi enviada
    if (!empty($_FILES['imagem']['name'])) {

        $nomeOriginal = basename($_FILES['imagem']['name']);
        $temp = $_FILES['imagem']['tmp_name'];

        // Nome único
        $nomeImagem = time() . "_" . $nomeOriginal;

        // Move
        if (!move_uploaded_file($temp, $pasta . $nomeImagem)) {
            $erro = true;
            $mensagem = "Erro ao mover a imagem!";
        }
    }

    if (!$erro) {
        // SQL
        $sql = "INSERT INTO sugestoes (nome, genero, descricao, imagem)
                VALUES (
                    '{$_POST['nome']}',
                    '{$_POST['genero']}',
                    '{$_POST['descricao']}',
                    '$nomeImagem'
                )";

        $execute = mysqli_query($conexao, $sql);

        if ($execute) {
            echo '<div class="container"><h2 class="text-center my-4">Sugestão cadastrada com sucesso!</h2></div>';
            echo '<div class="text-center"><a href="index.php?pg=jogos" class="btn btn-primary">Voltar</a></div>';
            echo '<br>';
            echo '<br>';
        } else {
            echo '<div class="container"><h2 class="text-center my-4">Erro ao cadastradar sugestão!</h2></div>';
            echo '<div class="text-center"><a href="index.php?pg=jogos" class="btn btn-primary">Voltar</a></div>';
            echo '<br>';
            echo '<br>';
        }
    }
}
?>
