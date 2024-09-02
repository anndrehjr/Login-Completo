<?php
session_start();
require '../includes/db_connect.php';

$usuario = $_POST['username'];
$senha = $_POST['password'];

$sql = "SELECT id, nome_usuario, senha, role FROM usuarios WHERE nome_usuario = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $usuario);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    $stmt->bind_result($id, $nome_usuario, $senha_hash, $role);
    $stmt->fetch();
    if (password_verify($senha, $senha_hash)) {
        $_SESSION['loggedin'] = true;
        $_SESSION['userid'] = $id;
        $_SESSION['role'] = $role;
        header("Location: ../welcome.php");
    } else {
        echo "Senha incorreta.";
    }
} else {
    echo "Usuário não encontrado!";
}

$stmt->close();
$conn->close();
?>
