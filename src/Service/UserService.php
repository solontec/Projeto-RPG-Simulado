<?php

namespace App\Service;
use App\DAO\UserDAO;
use App\User\User;
use Couchbase\IndexNotFoundException;
use http\Exception\InvalidArgumentException;

class UserService{
    private $userDAO;
    public function __construct(){
        $this->dao = new UserDAO();
    }

    public function registerUser(array $data){

        // trasfnormar em array fica assim ( pra entender melhjor )

        /*
            {
                'name' => 'nome inserido',
                'email' => 'email inserido',
                'password' => 'password inserida'
            }
         * */


        if(empty($data['name']) || empty($data['email']) || empty($data['password'])) {
            throw new InvalidArgumentException("All fields are require");
        }

        $hashedPassword = password_hash($data['password'], PASSWORD_DEFAULT);

        $user = new User(
            $data['name'],
            $data['email'],
            $hashedPassword
        );
        $dao = new UserDAO();

        if(!$dao->emailExists($user->getEmail())){
            $dao->SignUp($user);

            return [
                'success'=> true,
                'message' => 'User created'
            ];
        }

        return [
            'success'=> false,
            'message' => 'User exists'
        ];

    }

    public function SignInUser(array $data){
        if(empty($data['email']) || empty($data['password'])) {
            throw new InvalidArgumentException("All fields are require");
        }

        $user = new User(
            null,
            $data['email'],
            $data['password']
        );

if($this->dao->SignIn($user)){
    return[
        'success' => true,
        'messaged' => 'logado'
    ];

    return[
        'success' => false,
        'messaged' => 'invalid'
    ];
}



    }
}