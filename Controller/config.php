<?php 
class ConexaoComBanco {
    private $conexao;

    public function __construct($servidor, $banco, $usuario, $senha) {
        try {
            
            $this->conexao = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);
            $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $erro) {
            
            throw new Exception("Erro de Conexão: " . $erro->getMessage());
        }
    }

    public function getConexao() {
        
        return $this->conexao;
    }
}


$servidor = "localhost";
$banco = "helpdesk";
$usuario = "root";
$senha = "";

try {
    
    $gerenciadorConexao = new ConexaoComBanco($servidor, $banco, $usuario, $senha);

    
    $conexao = $gerenciadorConexao->getConexao();
} catch (Exception $e) {
    
    echo "Erro: " . $e->getMessage();
    $conexao = null;
}