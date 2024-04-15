<?php
require_once "../Controller/config.php";


class ListarChamado{

    private $conexao;


    public function __construct($conexao){
        $this->conexao = $conexao;
    }

    public function listarChamadosById($id_user){
        $select = $this->conexao->prepare("SELECT * FROM chamados WHERE fk_usuario_id = '$id_user'");
        $select->execute();
        return $select->fetchAll(PDO::FETCH_ASSOC);
    }

}