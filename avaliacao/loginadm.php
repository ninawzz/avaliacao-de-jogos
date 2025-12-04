<?php
require "admin/config.inc.php";

if (!isset($_POST['usuario']) || !isset($_POST['senha'])) {
    die("Usuário ou senha não enviados!");
    exit();
}

$usuarioadm = $_POST['usuario'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM admin LIMIT 1";
$resultado = mysqli_query($conexao, $sql);

$admin = mysqli_fetch_assoc($resultado);

if ($admin) {
    if ($usuarioadm == $admin['usuario'] && $senha == $admin['senha']) {
        $_SESSION['admin'] = true;
        header("Location: admin/index.php");
        exit();

    } else {
        header("Location: form_loginadm.php?erro=senha");
        exit();

    }
}