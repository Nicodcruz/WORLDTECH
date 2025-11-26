<?php
include_once 'conexao.php';

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$confirmar = $_POST['confirmar'];

if ($senha !== $confirmar) {
    echo "<script>alert('As senhas não coincidem!'); window.location.href='../cadastro.html';</script>";
    exit;
}

// Verificar se usuário já existe
$sql = "SELECT * FROM usuarios WHERE usuario='$usuario'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<script>alert('Usuário já existe!'); window.location.href='../cadastro.html';</script>";
    exit;
}

// Inserir novo usuário
$sql = "INSERT INTO usuarios (usuario, senha, nivel) VALUES ('$usuario', '$senha', 'user')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Conta criada com sucesso!'); window.location.href='../login.html';</script>";
} else {
    echo "<script>alert('Erro ao criar conta!'); window.location.href='../cadastro.html';</script>";
}
?>
