<?php
$host = getenv('DB_HOST') ?: 'db-gameboxe';
$usuario = getenv('DB_USER') ?: 'gameboxe';
$senha = getenv('DB_PASSWORD');
$banco = getenv('DB_NAME') ?: 'avaliacao_de_jogos';

$conexao = mysqli_connect($host, $usuario, $senha, $banco);

if (!$conexao) {
    die("Falha na conexão com o banco de dados.");
}    
