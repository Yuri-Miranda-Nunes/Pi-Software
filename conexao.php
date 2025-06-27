<?php
class BancoDeDados {
    private $host = 'localhost';
    private $nome_banco = 'estoque';
    private $usuario = 'root';
    private $senha = '';
    private $conexao;

    public function obterConexao() {
        if ($this->conexao == null) {
            try {
                $this->conexao = new PDO("mysql:host={$this->host};port=49170;dbname={$this->nome_banco}", $this->usuario, $this->senha);
                $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo "Erro ao conectar ao banco de dados: " . $e->getMessage();
            }
        }
        return $this->conexao;
    }



}


?>
