<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>alterarStatus</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

</head>

<body>
<?php


require_once "../Model/alterar_statusModel.php";


class AlterarStatusController {
    private $mdoel;

    public function __construct($conexao){
        $this->mdoel = new AlterarStatusModel($conexao);
    }

    public function alterarStatus($id, $status){
        $this->mdoel->alterarStatus($id, $status);
        echo "<script language='javascript' type='text/javascript'>
    Swal.fire({
        text: 'Proposta Aceita!',
        icon: 'success',
    });
  </script>";
    }


}
$id = $_POST['id_chamado'];
$status = $_POST['status'];
$alterarStatusController = new AlterarStatusController($conexao);
$alterarStatusController->alterarStatus($id, $status);


echo "<script language='javascript' type='text/javascript'>
    Swal.fire({
        text: 'StatusAlterado!',
        icon: 'success',
    }).then(function() {
        window.location.href = '../View/painel_admView.php';
    });
  </script>";
