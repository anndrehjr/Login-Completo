<?php
session_start();
require '../includes/db_connect.php';

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true || $_SESSION['role'] != 'admin') {
    header("Location: ../index.html");
    exit;
}

$id = $_POST['id'];

// Atualiza o papel do usuário para 'admin'
$sql = "UPDATE usuarios SET role = 'admin' WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    header("Location: ../view_users.php");
} else {
    echo "Erro ao promover o usuário: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
