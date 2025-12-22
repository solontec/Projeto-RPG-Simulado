<?php

namespace App\Controller;
use App\Service\UserService;

class CadastroController{
    public function handle(): void // handle lida com requisicao
    {
        if ($_SERVER['REQUEST_METHOD'] !== "POST") {
            http_response_code(405);
            echo json_encode(['error' => 'Method not allowed']);
            return;
        }
        // capturo o json bruto direto do que me enviar
        $jsonRaw = file_get_contents('php://input');

        // decodifico esse json eviado para um ARRAY!!!
        $data = json_decode($jsonRaw, true);
        if(!$data || !isset($data['name'],  $data['email'], $data['password'])){
            http_response_code(400);
            echo json_encode(['error' => 'Invalid']);
            return;
        }

       $service = new UserService();
        $result = $service->registerUser($data);

        if($result['success']){
            http_response_code(201);
            echo json_encode([
                'status' => 'created'
            ]);
        } else{
            http_response_code(400);
            echo json_encode([
                'error' => $result['error']
            ]);
        }

        echo json_encode($result);


    }
}


?>
