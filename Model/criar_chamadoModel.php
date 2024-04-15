<?php

require_once "../Controller/config.php";

class AbrirChamado{
    private $conexao;
    public function __construct($conexao){
        $this->conexao = $conexao;
    }


    public function abrirChamado($info){
        $insert =("INSERT INTO chamados(titulo_chamado, tipo_chamado, descricao_chamado, fk_usuario_id)
        VALUES(:titulo, :tipo, :descricao, :fk_usuario_id)");
        $inserirchamado =  $this->conexao->prepare($insert);
        $inserirchamado->bindparam('titulo', $info['titulo'], PDO::PARAM_STR);
        $inserirchamado->bindparam('tipo', $info['tipo'], PDO::PARAM_STR);
        $inserirchamado->bindparam('descricao', $info['descricao'], PDO::PARAM_STR);
        $inserirchamado->bindparam('fk_usuario_id', $info['id_user'], PDO::PARAM_INT);
        $inserirchamado->execute();

        if($inserirchamado->rowCount()>0){
            return "Sucesso";
        }else{
            return "Error";
        }
    }

}