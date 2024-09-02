<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
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
    <title>Bem-vindo</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Bem-vindo à Loja AJR STOR!</h1>
        <p>Obrigado por se logar. Agora você pode visualizar os usuários cadastrados.</p>
        <?php if ($_SESSION['role'] == 'admin'): ?>
            <a href="view_users.php" class="button-link">Ver Usuários Cadastrados</a>
        <?php endif; ?>
            <a href="logout.php" class="button-link">Sair</a>
    </div>

    <script>
        window.addEventListener('load', () => {
            document.body.classList.add('page-loaded');
        });
    </script>
</body>
</html>
