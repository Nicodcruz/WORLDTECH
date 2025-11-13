<?php
session_start();
if (!isset($_SESSION['usuario']) || $_SESSION['nivel'] != 'user') {
    header("Location: ../login.html");
    exit;
}
?>

<h2>Área do Usuário</h2>
<p>Bem-vindo, <?php echo $_SESSION['usuario']; ?>!</p>
<a href="logout.php">Sair</a>
