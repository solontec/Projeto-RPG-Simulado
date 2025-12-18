<?php


/**
 * @implements Usuario // doc
 */
interface Usuario{
    public function SignUp(User $user): void; // usage
    public function SignIn(User $user);



}