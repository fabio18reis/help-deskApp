<?php
require_once "../View/userView.php";
require_once "../Model/listar_chamadosModel.php";

Class ListarChamadosController{
    private $model;

    public function __construct($conexao){
        $this->model = new ListarChamado($conexao);
    
    }
    public function listarChamados($id_user){
        $chamados = $this->model->listarChamadosById($id_user);

        if($chamados != null){
            return $chamados;
        }else{
            
        }
    }
        
}


$listarChamadoController = new ListarChamadosController($conexao);
$chamadosUsuario = $listarChamadoController->listarChamados($user_id);

    

