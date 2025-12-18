<?php


class User{
    public string $name;
    public string $email;
    public string $password;
    private $conn;

    // here i define atributtes for this class

    public function __construct(string $name, string $email, string $password){
        $this->name = $name;
        $this->email = $email;
        $this->password = password_hash($password, PASSWORD_DEFAULT);

    } // init class with construct


    public function getName(){
        return $this->name;
    }
    public function getEmail(){
        return $this->email; //get Email
    }

    public function getPassword(){
        return $this->password; //get password
    }



}