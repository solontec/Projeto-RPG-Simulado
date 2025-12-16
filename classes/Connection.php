<?php

namespace classes;

class Connection{
    private string $hostname = 'localhost';
    private string $username = 'root';
    private string $password = '12345';

    private string $database = 'RPG';

    private $conn;

    public function __construct(){
        $this->conn = new \mysqli($this->hostname, $this->username, $this->password, $this->database);

        if($this->conn->connect_error){
            die("Connection Failed:" . $this->conn->connect_error);
        } else{
            echo "connected";
        }

    }

    public function getConnection(){
        return $this->conn;

    }
}