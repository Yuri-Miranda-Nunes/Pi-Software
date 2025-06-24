<?php
session_start();
require 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuarios WHERE usuario = :usuario";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['usuario' => $usuario]);
    $user = $stmt->fetch();

    if ($user && password_verify($senha, $user['senha'])) {
        $_SESSION['usuario'] = $user['usuario'];
        $_SESSION['id'] = $user['id'];
        $_SESSION['nivel'] = $user['nivel'];
        $_SESSION['nome'] = $user['nome'];
        header('Location: painel.php');
        exit;
    } else {
        $erro = "Usuário ou senha incorretos";
    }
}
?>

<form method="POST">
    <h2>Login</h2>
    <?php if (isset($erro)) echo "<p style='color:red'>$erro</p>"; ?>
    <input type="text" name="usuario" placeholder="Usuário" required><br>
    <input type="password" name="senha" placeholder="Senha" required><br>
    <button type="submit">Entrar</button>
</form>
