<?php


require_once '../Controller/config.php';

class ListarChamadosAdm{    
    private $conexao;


    public function __construct($conexao){
            $this->conexao = $conexao;
    }

    public function getAllChamados(){
        $sql = $this->conexao->prepare("SELECT * FROM chamados WHERE status_chamado != 'Resolvido'");
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getNotResolvedChamados(){
        $sql = $this->conexao->prepare("SELECT * FROM chamados WHERE status_chamado = 'Resolvido'");
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }
    
}