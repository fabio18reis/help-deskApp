<?php
session_start();

require_once "../Model/userModel.php";

class UserView
{
    private $model;

    public function __construct($model)
    {
        $this->model = $model;
    }

    public function userShow($user)
    {

        if ($_SESSION['logged_in']) {
            if (isset($_SESSION['user_name']) && isset($_SESSION['user_id'])) {
                $user = $_SESSION['user_name'];
                $user_id = $_SESSION['user_id'];
            }
        }
    }
}

$model = new UserModel();
if ($_SESSION['logged_in']) {
    $model->setUsername($_SESSION['user_name']);
    $model->setUserId($_SESSION['user_id']);
    $user_id = $model->getUserId();
    $username = $model->getUsername();

    if ($username !== null && $user_id !== null) {
        return $username && $user_id;
        
    } else {
        $username = "User";
    }
}
?>