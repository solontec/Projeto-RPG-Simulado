<?php

// Interfaces
require_once __DIR__ . '/Interface/UserInterface.php';

// Classes base
require_once __DIR__ . '/Model/User.php';
require_once __DIR__ . '/Model/Mission.php';

// Banco de dados
require_once __DIR__ . '/DAO/Connection/Connection.php';

// DAOs
require_once __DIR__ . '/DAO/UserDAO.php';
require_once __DIR__ . '/DAO/MissionDAO.php';

// Controllers
require_once __DIR__ . '/Controller/LoginController.php';
require_once __DIR__ . '/Controller/CadastroController.php';
require_once __DIR__ . '/Controller/MissionController.php';

// Services
require_once __DIR__ . '/Service/MissionService.php';


