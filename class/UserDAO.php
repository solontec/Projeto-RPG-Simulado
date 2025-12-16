<?php

namespace classes;

use classes\User;
use classes\Connection;

require_once "User.php";
require_once "Connection.php";
class UserDAO{
    private $conn;
    public function __construct(){
        $db = new Connection();
        $this->conn = $db->getConnection();


    }
    public function SignUp(string $name, string $email, string $password){
        $sql = "INSERT INTO usuarios(name, email, password) VALUES(?, ? ,?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("sss", $name, $email, $password);

        if($stmt->execute()){
            echo "deu bom";
        } else{
            $this->conn->rollback();
            return false;
        }
    }




}



