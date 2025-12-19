<?php


namespace App\Controller;
use App\User\User;
use App\DAO\UserDAO;


class CadastroController{
    public function handle() // handle lida com requisicao
    {
        if ($_SERVER['REQUEST_METHOD'] !== "POST") {
            return;
        }
        $hashPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $user = new User(
            $_POST['name'],
            $_POST['email'],
            $hashPassword
        );

        $dao = new UserDAO();

        if ($dao->SignUp($user)) {
            echo "Cadastrado com sucesso!";
        }


    }
}


?>
