<?php
session_start();
if (!isset($_SESSION['usuario']) || $_SESSION['nivel'] != 'admin') {
    header("Location: ../../login.html");
    exit;
}

include('../conexao.php');

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM usuarios WHERE id=$id");
$usuario = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $novoUsuario = $_POST['usuario'];
    $novaSenha = $_POST['senha'];
    $nivel = $_POST['nivel'];

    $sql = "UPDATE usuarios SET usuario='$novoUsuario', senha='$novaSenha', nivel='$nivel' WHERE id=$id";
    if ($conn->query($sql)) {
        header("Location: listar.php");
        exit;
    } else {
        echo "Erro ao atualizar: " . $conn->error;
    }
}
?>

<h2>Editar Usuário</h2>
<form method="POST">
    <label>Usuário:</label><br>
    <input type="text" name="usuario" value="<?php echo $usuario['usuario']; ?>" required><br><br>

    <label>Senha:</label><br>
    <input type="text" name="senha" value="<?php echo $usuario['senha']; ?>" required><br><br>

    <label>Nível:</label><br>
    <select name="nivel" required>
        <option value="user" <?php if($usuario['nivel']=='user') echo 'selected'; ?>>Usuário</option>
        <option value="admin" <?php if($usuario['nivel']=='admin') echo 'selected'; ?>>Administrador</option>
    </select><br><br>

    <button type="submit">Salvar Alterações</button>
</form>

<a href="listar.php">Voltar</a>
