<?php
class UserModel{

    private $name;
    private $id;

    public function getUsername(){
       return $this->name;
    }

    public function setUsername($name){
            $this->name = $name;
        
    }

    public function setUserId($id){
        $this->id = $id;
    }

    public function getUserId(){
        return $this->id;

    }
    
}
?>