<?php

require_once "../Model/logoutModel.php";

class SessionController
{
    private $logoutModel;

    public function __construct()
    {
        $this->logoutModel = new LogoutModel();
    }

    public function destroySession($page)
    {
        $this->logoutModel->sessionDestroyer();
        $this->redirectTo($page);
    }
    public function redirectTo($page)
    {
        echo "<script language='javascript' type='text/javascript'>
            " . ("alert('Redirecionando ao Início');" ) . "
            setTimeout(function() {
                window.location = '../".$page.".php';
            }, 1000);
        </script>";
    }

}
$sessionController = new SessionController();
$page = "index";
$sessionController->destroySession($page);