<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrar - Help Desk</title>
</head>

<body>
    <?php

    require_once "../Model/signinModel.php";
    require_once "../Model/userModel.php";

    class SigninController{
        private $conexao;
        private $signinModel;

        public function __construct($conexao, $signinModel){
            $this->conexao = $conexao;
            $this->signinModel = $signinModel;        
        }

        public function signinAction($username, $password){
            if(!empty($username) && !empty($password) && $this->conexao !== null){
               $user = $this ->signinModel->getUser($username);
               
               if($user){
                $passwordHash = $user['pass_char'];
                $username = $user['user_name'];
               
            

                if(password_verify($password, $passwordHash)){                                        
                   $this->startSession($user);                                      
                   
                }else{
                    $this->redirectToSigninPage("Your username or your password is incorrect");
                }
               }else{
                $this->redirectToSigninPage("Do it Login first");
               }
        }else{
            $this->redirectToSigninPage();
            
            echo "<script language='javascript' type='text/javascript'>
        alert('Error!')
        window.location.href='../index.php'</script>";
        }
    }

   
    public function startSession($user){
        session_start();
        $_SESSION['logged_in'] = true;
        $_SESSION['user_name'] = $user['user_name'];
        $_SESSION['user_id'] = $user['user_id'];
        $_SESSION['user_type'] = $user['user_tipo'];
        $message = "You are now logged in,". $user['user_name'] . ".";


        if($_SESSION['user_type'] == 'Adm'){
            echo "<script language='javascript' type='text/javascript'>
        " . ($message ? "alert('$message');" : "") . "
        setTimeout(function() {
            window.location = '../View/inicioAdmView.php';
        }, 1000);
    </script>";
        }else{
        echo "<script language='javascript' type='text/javascript'>
        " . ($message ? "alert('$message');" : "") . "
        setTimeout(function() {
            window.location = '../View/inicioView.php';
        }, 1000);
    </script>";
    }
}
    private function redirectToSigninPage($message = null) {

        echo "<script language='javascript' type='text/javascript'>
            " . ($message ? "alert('$message');" : "") . "
            setTimeout(function() {
                window.location = '../index.php';
            }, 1000);
        </script>";
    }
    
}
$signinController = new SigninController($conexao, new LoginModel($conexao));

if(isset($_POST['username']) && isset($_POST['password'])){
    $password = $_POST['password'];
    $username = $_POST['username'];

    $signinController->signinAction($username, $password);
}else{
    echo "<script language='javascript' type='text/javascript'>
        alert('Please enter your username and password!')
        window.location.href='../index.php'</script>";
}
?>
</body>

</html>