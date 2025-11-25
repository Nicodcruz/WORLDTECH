<?php
$host = "sql10.freesqldatabase.com";
$usuario = "sql10809265";
$senha = "wciKk8eIiz";
$banco = "sql10809265";
$porta = "3306";

$conn = new mysqli($host, $usuario, $senha, $banco, $porta);

if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}
?>
