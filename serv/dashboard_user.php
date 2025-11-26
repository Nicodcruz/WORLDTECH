<?php
session_start();
if (!isset($_SESSION['usuario']) || $_SESSION['nivel'] != 'user') {
    header("Location: ../login.html");
    exit;
}

// Exemplo de valor de doação puxado do backend:
$doacao = 0; // você troca isso depois pelo valor real
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Área do Usuário</title>
    <link rel="stylesheet" href="styles_login/user.css">
</head>
<body>

<div class="container">

    <h2>Área do Usuário</h2>
    <p class="welcome">Bem-vindo, <?php echo $_SESSION['usuario']; ?>!</p>

    <!-- Card de doações -->
    <div class="card">
        <h3>Suas Doações 🌱</h3>
        <p class="doacao">R$ <?php echo number_format($doacao, 2, ',', '.'); ?></p>
        <p class="descricao">Obrigado por apoiar nossa missão ecológica!</p>
    </div>

    <!-- Loja ecológica -->
    <h3 class="titulo-loja">Itens Ecológicos Disponíveis</h3>

    <div class="loja">
        <div class="item">
            <img src="ECOBEG.jpg" alt="ECOBEG">
            <h4>Kit Sacolas Ecológicas (3un.)</h4>
            <p>R$ 15,90</p>
            <a class="btn comprar">Comprar</a>
        </div>

        <div class="item">
            <img src="COPO DOBRAVEL.jpg" alt="COPO DOBRAVEL">
            <h4>Copo dobravel (reutilizavel)</h4>
            <p>R$ 10,90</p>
            <a class="btn comprar">Comprar</a>
        </div>

        <div class="item">
            <img src="CANUDO.jpg" alt="CANUDO">
            <h4>Kit canudos ecológicos</h4>
            <p>R$ 20,90</p>
            <a class="btn comprar">Comprar</a>
        </div>
    </div>

    <div class="buttons">
        <a class="btn danger" href="logout.php">Sair</a>
    </div>

</div>

</body>
</html>
