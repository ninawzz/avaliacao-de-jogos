<?php
require_once "config.inc.php";

$pasta = __DIR__ . "/../imagem_jogos/";

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
        $sql = "INSERT INTO jogos (nome, genero, avaliacao, descricao, imagem)
                VALUES (
                    '{$_POST['nome']}',
                    '{$_POST['genero']}',
                    '{$_POST['avaliacao']}',
                    '{$_POST['descricao']}',
                    '$nomeImagem'
                )";

        $execute = mysqli_query($conexao, $sql);

        if ($execute) {
            echo "<h2>Jogo cadastrado com sucesso!</h2>";
            echo "<a href='index.php?pg=admin_jogos'>Voltar</a>";
        } else {
            $erro = true;
            $mensagem = "Erro ao cadastrar: " . mysqli_error($conexao);
        }
    }
}
?>
