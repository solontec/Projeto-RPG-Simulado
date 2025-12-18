<?php

require_once __DIR__ . '/../../src/bootstrap.php';



class CadastroController{
    public function handle() // handle lida com requisicao
    {
        if ($_SERVER['REQUEST_METHOD'] !== "POST") {
            return;
        }
        $user = new User(
            $_POST['name'],
            $_POST['email'],
            $_POST['password']
        );

        $dao = new UserDAO();

        if ($dao->SignUp($user)) {
            echo "Cadastrado com sucesso!";
        } else{
            echo "Usuariuo ou senha invalidos";
        }

    }
}


?>
