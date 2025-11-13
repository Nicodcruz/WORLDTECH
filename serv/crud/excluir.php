<?php
session_start();
if (!isset($_SESSION['usuario']) || $_SESSION['nivel'] != 'admin') {
    header("Location: ../../login.html");
    exit;
}

include('../conexao.php');

$id = $_GET['id'];

$sql = "DELETE FROM usuarios WHERE id=$id";
if ($conn->query($sql)) {
    header("Location: listar.php");
    exit;
} else {
    echo "Erro ao excluir: " . $conn->error;
}
?>
