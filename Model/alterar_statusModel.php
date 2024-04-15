<?php

require_once "../Controller/config.php";


class AlterarStatusModel{
    private $conexao;

    public function __construct($conexao){

        $this ->conexao = $conexao;
       
    }

    public function alterarStatus($id ,$status_novo){
        $sql = "UPDATE chamados SET status_chamado = :status_novo WHERE id_chamado = :id";
        $sqlu = $this->conexao->prepare($sql);
        $sqlu->bindParam(':status_novo', $status_novo);
        $sqlu->bindParam(':id', $id);
        $sqlu->execute();
    }
}