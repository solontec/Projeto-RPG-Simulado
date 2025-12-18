<?php


class UserDAO implements User {
    private $conn;
    public function __construct(){
        $db = new Connection();
        $this->conn = $db->getConnection();
    }


    public function SignUp(User|\Interface\User $user): void{
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

        if($stmt->execute()){
            echo "deu bom";
        } else{
            $this->conn->rollback(); // dá um passo pora trás pra n perder algo e acontecer uma merda colossal
        }

        $stmt->close();
        $this->conn->close();
    }

    public function SignIn(User|\Interface\User $user): bool
    {
        $sql = "SELECT email, password FROM usuarios WHERE email = ?";
        $stmt = $this->conn->prepare($sql);

        if (!isset($stmt)) {
            echo "Erro no prepare" . $this->conn->error;
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
