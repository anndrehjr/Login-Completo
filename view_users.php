<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true || $_SESSION['role'] != 'admin') {
    header("Location: index.html");
    exit;
}

require 'includes/db_connect.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuários Cadastrados</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Usuários Cadastrados</h1>
        <?php
        $sql = "SELECT id, nome_usuario, email, role FROM usuarios";
        if ($result = $conn->query($sql)) {
            if ($result->num_rows > 0) {
                echo "<table><tr><th>ID</th><th>Nome de Usuário</th><th>E-mail</th><th>Role</th></tr>";
                while ($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["id"] . "</td><td>" . $row["nome_usuario"] . "</td><td>" . $row["email"] . "</td><td>" . $row["role"] . "</td></tr>";
                }
                echo "</table>";
            } else {
                echo "<p>Nenhum usuário encontrado.</p>";
            }
            $result->free();
        } else {
            echo "<p>Erro ao executar a consulta: " . $conn->error . "</p>";
        }
        $conn->close();
        ?>
        <a href="welcome.php" class="button-link">Voltar</a>
    </div>

    <script>
        window.addEventListener('load', () => {
            document.body.classList.add('page-loaded');
        });
    </script>
</body>
</html>
