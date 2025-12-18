<?php


class LoginController{
    public function handle() // handle lida com requisicao
    {
        if ($_SERVER['REQUEST_METHOD'] !== "POST") {
            return;
        }


        $user = new User(

            $_POST['email'],
            $_POST['password']
        );

        $dao = new UserDAO();

        if ($dao->SignIn($user)) {
            header("Location: public.php");
        }


    }
}


?>
