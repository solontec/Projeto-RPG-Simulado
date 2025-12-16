<?php
use Classes\User;
use Classes\Connection;
use Classes\UserDAO;
require_once "../class/Connection.php";
require_once "../class/UserDAO.php";
require_once "../class/User.php";

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$insert = new UserDAO();
$insert->SignUp($name, $email, $password);

?>
