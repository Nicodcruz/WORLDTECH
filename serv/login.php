<?php
session_start();
include('conexao.php');

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM usuarios WHERE usuario='$usuario' AND senha='$senha'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $dados = $result->fetch_assoc();

    $_SESSION['usuario'] = $dados['usuario'];
    $_SESSION['nivel'] = $dados['nivel']; // 'admin' ou 'user'

    if ($dados['nivel'] == 'admin') {
        header("Location: dashboard_admin.php");
    } else {
        header("Location: dashboard_user.php");
    }
} else {
    echo "<script>alert('Usuário ou senha incorretos'); window.location.href='../login.html';</script>";
}
?>
