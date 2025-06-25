<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header('Location: login.php');
    exit;
}

$nome = $_SESSION['nome'];
$nivel = $_SESSION['nivel'];
?>

<h2>Bem-vindo, <?php echo $nome; ?>!</h2>
<p>Nível: <strong><?php echo $nivel; ?></strong></p>

<?php if ($nivel === 'admin'): ?>
    <a href="produtos.php">Gerenciar Produtos</a><br>
    <a href="movimentar.php">Movimentar Estoque</a><br>
<?php else: ?>
    <a href="movimentar.php">Registrar Saída</a><br>
<?php endif; ?>

<a href="logout.php">Sair</a>
