<?php
// cadastro.php

header('Content-Type: application/json');

// Conexão com banco de dados (ajuste usuário/senha conforme seu ambiente)
$mysqli = new mysqli("127.0.0.1", "root", "", "estoque");

if ($mysqli->connect_error) {
    http_response_code(500);
    echo json_encode(["erro" => "Erro na conexão com o banco de dados"]);
    exit;
}

// Recebe e filtra os dados do POST
$nome = trim($_POST['nome'] ?? '');
$codigo = trim($_POST['codigo'] ?? '');
$descricao = trim($_POST['descricao'] ?? '');

// Validação simples
if (empty($nome) || empty($codigo) || empty($descricao)) {
    http_response_code(400);
    echo json_encode(["erro" => "Todos os campos são obrigatórios."]);
    exit;
}

// Prepara e executa o INSERT
$stmt = $mysqli->prepare("INSERT INTO produtos (nome, codigo, descricao) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $nome, $codigo, $descricao);

if ($stmt->execute()) {
    echo json_encode(["sucesso" => true]);
} else {
    http_response_code(500);
    echo json_encode(["erro" => "Erro ao cadastrar produto: " . $stmt->error]);
}

$stmt->close();
$mysqli->close();
