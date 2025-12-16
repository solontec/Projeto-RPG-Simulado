<?php
namespace classes;
require_once "Connection.php";
class User{
    public string $name;
    public string $email;
    public string $password;

    private $conn;

    // here i define atributtes for this class

    public function __construct(string $name, string $email, string $password){
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;

    } // init class with construct

    public function generateHash($s){
        $password = password_hash($this->password, PASSWORD_DEFAULT);
    }



    public function getName():string{
        return $this->name; // get no nome
    }
    public function getEmail(): string{
        return $this->email; //get Email
    }

    public function getPassword(): string{
        return $this->password; //get password
    }



}