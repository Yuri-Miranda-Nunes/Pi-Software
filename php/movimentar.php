<?php
session_start();
require 'conexao.php';

$id_usuario = $_SESSION['id'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_produto = $_POST['produto'];
    $tipo = $_POST['tipo'];
    $quantidade = (int)$_POST['quantidade'];

    // Atualiza estoque
    $operacao = $tipo === 'entrada' ? '+' : '-';
    $pdo->prepare("UPDATE produtos SET quantidade = quantidade $operacao :qtd WHERE id = :id")
        ->execute(['qtd' => $quantidade, 'id' => $id_produto]);

    // Registra movimentação
    $stmt = $pdo->prepare("INSERT INTO movimentacoes (id_produto, id_usuario, tipo, quantidade) 
                           VALUES (:idp, :idu, :tipo, :qtd)");
    $stmt->execute([
        'idp' => $id_produto,
        'idu' => $id_usuario,
        'tipo' => $tipo,
        'qtd' => $quantidade
    ]);
}

$produtos = $pdo->query("SELECT * FROM produtos")->fetchAll();
?>

<h2>Registrar Movimentação</h2>
<form method="POST">
    <select name="produto" required>
        <option value="">Selecione o produto</option>
        <?php foreach ($produtos as $p): ?>
            <option value="<?= $p['id'] ?>"><?= $p['nome'] ?> (<?= $p['quantidade'] ?>)</option>
        <?php endforeach; ?>
    </select>
    <select name="tipo">
        <option value="entrada">Entrada</option>
        <option value="saida">Saída</option>
    </select>
    <input type="number" name="quantidade" min="1" required>
    <button type="submit">Registrar</button>
</form>

<a href="painel.php">Voltar</a>
