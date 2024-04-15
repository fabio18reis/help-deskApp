<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar - Help Desk</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

</head>

<body>

<?php

require_once "../Model/signupModel.php";

class SignUpController
{
    private $model;

    public function __construct($conexao)
    {
        $this->model = new SignupModel($conexao);
    }

    public function signUp($postData){
      $this->model->registryHandler($postData);

      
    }
}

$SignUpController = new SignUpController($conexao);
$postData = $_POST;
$SignUpController->SignUp($postData);