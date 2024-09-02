<?php
require '../includes/db_connect.php';

$nome_usuario = $_POST['username'];
$email = $_POST['email'];
$senha = password_hash($_POST['password'], PASSWORD_DEFAULT);

$sql = "INSERT INTO usuarios (nome_usuario, email, senha) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $nome_usuario, $email, $senha);

if ($stmt->execute()) {
    header("Location: ../success.html");
} else {
    echo "Erro: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
