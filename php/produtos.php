<?php
session_start();
if ($_SESSION['nivel'] !== 'admin') {
    die('Acesso negado');
}

require 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $codigo = $_POST['codigo'];
    $quantidade = $_POST['quantidade'];
    $preco = $_POST['preco'];

    $sql = "INSERT INTO produtos (nome, codigo, quantidade, preco)
            VALUES (:nome, :codigo, :quantidade, :preco)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        'nome' => $nome,
        'codigo' => $codigo,
        'quantidade' => $quantidade,
        'preco' => $preco
    ]);
}

$produtos = $pdo->query("SELECT * FROM produtos")->fetchAll();
?>

<h2>Cadastro de Produtos</h2>
<form method="POST">
    <input name="nome" placeholder="Nome" required>
    <input name="codigo" placeholder="Código" required>
    <input name="quantidade" type="number" placeholder="Qtd inicial" required>
    <input name="preco" type="number" step="0.01" placeholder="Preço" required>
    <button type="submit">Cadastrar</button>
</form>

<h2>Produtos</h2>
<table border="1">
<tr><th>ID</th><th>Nome</th><th>Código</th><th>Qtd</th><th>Preço</th></tr>
<?php foreach ($produtos as $p): ?>
<tr>
    <td><?= $p['id'] ?></td>
    <td><?= $p['nome'] ?></td>
    <td><?= $p['codigo'] ?></td>
    <td><?= $p['quantidade'] ?></td>
    <td>R$ <?= $p['preco'] ?></td>
</tr>
<?php endforeach; ?>
</table>
<a href="painel.php">Voltar</a>
