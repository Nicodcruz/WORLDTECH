<?php
$host = "sql10.freesqldatabase.com";
$usuario = "sql10807603";
$senha = "iZr5jZQn49";
$banco = "sql10807603";
$porta = "3306";

$conn = new mysqli($host, $usuario, $senha, $banco, $porta);

if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}
?>
