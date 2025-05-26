<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once "conexao.php";

    $codigo = $_POST['codigo'];
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];

    $sql = "INSERT INTO produtos (codigo, nome, descricao) VALUES (?, ?, ?)";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("iss", $codigo, $nome, $descricao);

    if ($stmt->execute()) {
        echo "<script>alert('Produto cadastrado com sucesso!'); window.location.href='index.html';</script>";
    } else {
        echo "Erro ao cadastrar produto: " . $stmt->error;
    }

    $stmt->close();
    $conexao->close();
}
?>
