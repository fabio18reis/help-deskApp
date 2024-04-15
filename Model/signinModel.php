<?php

require_once "../Controller/config.php";
class LoginModel
{
    private $conexao;

    public function __construct($conexao)
    {
        $this->conexao = $conexao;
    }

    public function getUser($username){
        $query = $this->conexao->prepare("SELECT u.user_tipo, u.user_id, u.user_name, p.pass_char FROM user_info u
        inner join user_pass p ON u.user_id = p.user_fk_id WHERE u.user_name=?");
        $query->execute([$username]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }
    
 
}
