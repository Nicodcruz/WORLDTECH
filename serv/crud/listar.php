<?php
session_start();
if (!isset($_SESSION['usuario']) || $_SESSION['nivel'] != 'admin') {
    header("Location: ../../login.html");
    exit;
}

include('../conexao.php');
$result = $conn->query("SELECT * FROM usuarios");
?>

<h2>Gerenciamento de Usuários</h2>
<a href="criar.php">+ Adicionar Usuário</a> | 
<a href="../logout.php">Sair</a>
<br><br>

<table border="1" cellpadding="8">
    <tr>
        <th>ID</th>
        <th>Usuário</th>
        <th>Nível</th>
        <th>Ações</th>
    </tr>
    <?php while($row = $result->fetch_assoc()): ?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['usuario']; ?></td>
        <td><?php echo $row['nivel']; ?></td>
        <td>
            <a href="editar.php?id=<?php echo $row['id']; ?>">Editar</a> | 
            <a href="excluir.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Tem certeza que deseja excluir?');">Excluir</a>
        </td>
    </tr>
    <?php endwhile; ?>
</table>
