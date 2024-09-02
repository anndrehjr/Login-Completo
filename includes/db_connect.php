<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "meubanco";

// Criar conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>
