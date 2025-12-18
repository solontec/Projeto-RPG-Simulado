<?php

require_once __DIR__ . '/../../src/bootstrap.php';
use App\Controller\CadastroController;

$cadastro = new CadastroController();
$cadastro->handle();
