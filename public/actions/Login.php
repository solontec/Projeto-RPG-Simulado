<?php


require_once __DIR__ . '/../../src/bootstrap.php';
use App\Controller\LoginController;
$login = new LoginController();
$login->handle();



