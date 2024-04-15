<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>alterarStatus</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

</head>

<body>

<?php
require_once "../Model/criar_chamadoModel.php";

Class AbrirChamadoController{

    private $model;

    public function __construct($conexao){
        $this->model = new AbrirChamado($conexao);
        
    }

    public function abrirChamado($infos){
        $infos = $this->model->abrirChamado($infos);
    }
}
$chamadoController = new abrirChamadoController($conexao);
$infos = $_POST;
$chamadoController -> abrirChamado($infos);


echo "<script language='javascript' type='text/javascript'>
    Swal.fire({
        text: 'StatusAlterado!',
        icon: 'success',
    }).then(function() {
        window.location.href = '../View/listar_chamadosView.php';
    });
  </script>";


