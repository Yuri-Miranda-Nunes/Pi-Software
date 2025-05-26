<?php
include '../conexao.php'; // ou o caminho correto do seu arquivo de conexão

$sql = "SELECT * FROM produtos"; // substitua pelo nome real da tabela
$result = $conn->query($sql);

$produtos = [];

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $produtos[] = $row;
  }
}

echo json_encode($produtos);
?>
