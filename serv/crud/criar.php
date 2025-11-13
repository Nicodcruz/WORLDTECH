<?php
session_start();
if (!isset($_SESSION['usuario']) || $_SESSION['nivel'] != 'admin') {
    header("Location: ../../login.html");
    exit;
}

include('../conexao.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    $nivel = $_POST['nivel'];

    $sql = "INSERT INTO usuarios (usuario, senha, nivel) VALUES ('$usuario', '$senha', '$nivel')";
    if ($conn->query($sql)) {
        header("Location: listar.php");
        exit;
    } else {
        echo "Erro ao cadastrar usuário: " . $conn->error;
    }
}
?>

<h2>Novo Usuário</h2>
<form method="POST">
    <label>Usuário:</label><br>
    <input type="text" name="usuario" required><br><br>

    <label>Senha:</label><br>
    <input type="password" name="senha" required><br><br>

    <label>Nível:</label><br>
    <select name="nivel" required>
        <option value="user">Usuário</option>
        <option value="admin">Administrador</option>
    </select><br><br>

    <button type="submit">Cadastrar</button>
</form>

<a href="listar.php">Voltar</a>
