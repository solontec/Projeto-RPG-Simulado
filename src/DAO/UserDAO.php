<?php


namespace App\DAO;

use src\DAO\Connection\Connection;
use App\UserInterface\UserInterface;
use App\User\User;
class UserDAO
{
    private $conn;

    public function __construct()
    {
        $db = new Connection();
        $this->conn = $db->getConnection();
    }


    public function SignUp(User $user): void
    {
        $sql = "INSERT INTO usuarios(name, email, password) VALUES(?, ? ,?)";
        $stmt = $this->conn->prepare($sql);

        $name = $user->getName();
        $email = $user->getEmail();
        $password = $user->getPassword();
        $stmt->bind_param(
            "sss",
            $name,
            $email,
            $password
        );

        if ($stmt->execute()) {
            echo "Usuario Cadastrado com Sucesso!";
        } else {
            $this->conn->rollback(); // dá um passo pora trás pra n perder algo e acontecer uma merda colossal
        }

        $stmt->close();
        $this->conn->close();
    }

    public function SignIn(User $user): bool
    {
        $sql = "SELECT email, password FROM usuarios WHERE email = ?";
        $stmt = $this->conn->prepare($sql);

        if (!isset($stmt)) {
            die("error");
        }

        $email = $user->getEmail();
        $password = $user->getPassword();
        $stmt->bind_param("s", $email);
        $stmt->execute();

        $result = $stmt->get_result();
        if ($result->num_rows === 1) {
            $usuario = $result->fetch_assoc();
            if (password_verify($password, $usuario['password'])) {
                session_start();
                $_SESSION['usuario'] = $usuario['email'];
                return true;
            }

        }

    return false;

    }
}
