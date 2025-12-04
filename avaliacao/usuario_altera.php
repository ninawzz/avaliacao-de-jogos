<?php

require_once "admin/config.inc.php";

if ($_POST['senha_hash'] !== $_POST['confirmar_senha']) {
    echo '<div class="container"><h2 class="text-center my-4">As senhas não coincidem!</h2></div>';
    echo '<div class="text-center"><a href="index.php?pg=conta" class="btn btn-secondary">Voltar</a></div>';
    exit;
}

$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];

if (!empty($_POST['senha_hash'])) {
    $senha_hash = password_hash($_POST['senha_hash'], PASSWORD_DEFAULT);
    $senha_sql = ", senha_hash = '$senha_hash'";
} else {
    $senha_sql = "";
}

$sql = "UPDATE usuarios SET
            nome = '$nome',
            email = '$email'
            $senha_sql
        WHERE id = '$id'";

$resultado = mysqli_query($conexao, $sql);

if ($resultado) {
    echo '<div class="container"><h2 class="text-center my-4">Usuário alterado com sucesso!</h2></div>';
    echo '<div class="text-center"><a href="index.php?pg=conta" class="btn btn-secondary">Voltar</a></div>';
    echo '<br>';
    echo '<br>';
} else {
    echo '<div class="container"><h2 class="text-center my-4">Erro ao alterar usuário!</h2></div>';
    echo '<div class="text-center"><a href="index.php?pg=conta" class="btn btn-secondary">Voltar</a></div>';
    echo '<br>';
    echo '<br>';
}
?>
