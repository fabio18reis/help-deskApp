<?PHP
    require_once "../Model/listar_chamadosAdmModel.php";



    class ListarChamadosAdmController{
        private $model;


        public function __construct($conexao){
            $this->model = new ListarChamadosAdm($conexao);
        }
        public function listarTodosChamados(){
            $chamados = $this->model->getAllChamados();

            if($chamados != null){
                return $chamados;
            }else{
                return null;
            }
        }
    
    public function listarChamadosResolvidos(){
        $resolvidos = $this->model->getNotResolvedChamados();

        if($resolvidos != null){
            return $resolvidos;
        }else{
            return null;
        }
    }
}


    $listarChamadosAdmController  = new ListarChamadosAdmController($conexao);
    $chamados = $listarChamadosAdmController->listarTodosChamados();
    $resolvidos = $listarChamadosAdmController->listarChamadosResolvidos();