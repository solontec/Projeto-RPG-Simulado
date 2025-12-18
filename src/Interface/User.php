<?php


/**
 * @implements User // doc
 */
interface User{
    public function SignUp(User $user): void; // usage
    public function SignIn(User $user);

}