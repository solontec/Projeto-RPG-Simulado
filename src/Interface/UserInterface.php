<?php

namespace App\UserInterface;
/**
 * @implements UserInterface // doc
 */
interface UserInterface{
    public function SignUp(User $user): void; // usage
    public function SignIn(UserInterface $user);

}