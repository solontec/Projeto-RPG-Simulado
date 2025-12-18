<?php

require_once __DIR__ . '/../../src/bootstrap.php';
require_once '../../src/Controller/CadastroController.php';

$cadastro = new CadastroController();
$cadastro->handle();
