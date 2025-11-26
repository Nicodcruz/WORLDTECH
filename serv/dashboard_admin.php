<?php
session_start();
if (!isset($_SESSION['usuario']) || $_SESSION['nivel'] != 'admin') {
    header("Location: ../login.html");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Painel do Administrador</title>
    <link rel="stylesheet" href="styles_login/admin.css">
</head>
<body>

<div class="container">
    <h2>Painel do Administrador</h2>
    <p class="welcome">Bem-vindo, <?php echo $_SESSION['usuario']; ?>!</p>

    <div class="buttons">
        <a class="btn primary" href="crud/listar.php">Gerenciar Registros</a>
        <a class="btn danger" href="logout.php">Sair</a>
    </div>
</div>

</body>
</html>
