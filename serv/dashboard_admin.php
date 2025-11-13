<?php
session_start();
if (!isset($_SESSION['usuario']) || $_SESSION['nivel'] != 'admin') {
    header("Location: ../login.html");
    exit;
}
?>

<h2>Painel do Administrador</h2>
<p>Bem-vindo, <?php echo $_SESSION['usuario']; ?>!</p>
<a href="crud/listar.php">Gerenciar Registros</a>
<br><br>
<a href="logout.php">Sair</a>
