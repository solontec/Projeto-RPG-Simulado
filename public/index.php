<?php
use Classes\User;
use Classes\Connection;
use Classes\UserDAO;
require_once "../classes/Connection.php";
require_once "../classes/UserDAO.php";
require_once "../classes/User.php";

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$insert = new UserDAO();
$insert->SignUp($name, $email, $password);

?>
