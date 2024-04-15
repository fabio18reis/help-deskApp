<?php
require_once "../Controller/config.php";

class SignupModel
{

    private $conexao;

    public function __construct($conexao)
    {
        $this->conexao = $conexao;
    }

    public function registryHandler($postData)
    {
        $userQuery = $this->conexao->prepare("SELECT * FROM user_info WHERE user_name = :username");
        $userQuery->bindParam(":username", $postData['username'], PDO::PARAM_STR);
        $userQuery->execute();

        if ($userQuery->rowCount() > 0) {
            
            echo "<script language='javascript' 
            type='text/javascript'>
            " . ("alert('This user has already been registered. Please try a different Username.');") . "
            setTimeout(function() {
                window.location = '../View/signup.php';
            }, 1000);
        </script>";
        } elseif ($postData['password'] == $postData['re-password']) {
            $hashPassword = password_hash($postData['password'], PASSWORD_DEFAULT);

            $insertuserQuery = "INSERT INTO user_info (user_name)VALUES(:username)";
            $insertuserQuery = $this->conexao->prepare($insertuserQuery);
            $insertuserQuery->bindParam(':username', $postData['username'], PDO::PARAM_STR);
            $insertuserQuery->execute();
            $userId = $this->conexao->lastInsertId();
            
            $inserpassQuery = "INSERT INTO user_pass (pass_char, user_fk_id) VALUES(:pass,:userid)";
            $inserpassQuery = $this->conexao->prepare($inserpassQuery);
            $inserpassQuery->bindParam(":userid", $userId, PDO::PARAM_INT);
            $inserpassQuery->bindParam(":pass", $hashPassword, PDO::PARAM_STR);
            $inserpassQuery->execute();

            if ($insertuserQuery->rowCount() > 0 && $inserpassQuery->rowCount() > 0) {
                echo "<script language='javascript' type='text/javascript'>
            " . ("alert('Success!');") . "
            setTimeout(function() {
                window.location = '../index.php';
            }, 1000);
        </script>";
            } else {
                echo "<script language='javascript' type='text/javascript'>
            " . ("alert('Failed!');") . "
            setTimeout(function() {
                window.location = '../index.php';
            }, 1000);
        </script>";
            }

        }else{            
            echo "<script language='javascript' type='text/javascript'>
        alert('Your password does not match!')
        window.location.href='../view/signup.php'</script>";
        }

    }

}