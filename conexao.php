<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "avaliacao_de_jogos"; // TEM QUE SER IGUAL AO NOME DO BANCO
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}
?>



