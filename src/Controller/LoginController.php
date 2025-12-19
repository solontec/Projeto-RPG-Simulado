<?php

use App\DAO\UserDAO;
use App\User\User;
class LoginController{
    public function handle() // handle lida com requisicao
    {
        if ($_SERVER['REQUEST_METHOD'] !== "POST") {
            return;
        }

        $user = new User(
            null,
            $_POST['email'],
            $_POST['password']
        );

        $dao = new UserDAO();

        if ($dao->SignIn($user)) {
            header("Location: ../PageInicial.php");
        }


    }
}
?>
