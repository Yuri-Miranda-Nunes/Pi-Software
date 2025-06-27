<?php

class estoque {
        private $conexao;
        private $nome_tabela = 'produtos';

public function __construct($db) {
            $this->conexao = $db; // Directly assign the PDO object
        }
public function cadastrarProduto($nome, $codigo, $quantidade, $preco) {
            try {
                $sql = "INSERT INTO {$this->nome_tabela} (nome, codigo, quantidade, preco)
                        VALUES (:nome, :codigo, :quantidade, :preco)";
                $stmt = $this->conexao->prepare($sql);
                $stmt->execute([
                    'nome' => $nome,
                    'codigo' => $codigo,
                    'quantidade' => $quantidade,
                    'preco' => $preco
                ]);
            } catch (PDOException $e) {
                throw new Exception("Erro ao cadastrar produto: " . $e->getMessage());
            }
        }
public function listarProdutos() {
            try {
                $sql = "SELECT * FROM {$this->nome_tabela}";
                return $this->conexao->query($sql)->fetchAll();
            } catch (PDOException $e) {
                throw new Exception("Erro ao listar produtos: " . $e->getMessage());
            }
        }
public function excluirProduto($id) {
            try {
                $sql = "DELETE FROM {$this->nome_tabela} WHERE id = :id";
                $stmt = $this->conexao->prepare($sql);
                $stmt->execute(['id' => $id]);
            } catch (PDOException $e) {
                throw new Exception("Erro ao excluir produto: " . $e->getMessage());
            }
        }
public function atualizarProduto($id, $nome, $codigo, $quantidade, $preco) {
            try {
                $sql = "UPDATE {$this->nome_tabela} SET nome = :nome, codigo = :codigo, quantidade = :quantidade, preco = :preco WHERE id = :id";
                $stmt = $this->conexao->prepare($sql);
                $stmt->execute([
                    'id' => $id,
                    'nome' => $nome,
                    'codigo' => $codigo,
                    'quantidade' => $quantidade,
                    'preco' => $preco
                ]);
            } catch (PDOException $e) {
                throw new Exception("Erro ao atualizar produto: " . $e->getMessage());
            }
        }
    }