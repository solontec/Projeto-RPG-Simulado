<?php
use src\DAO\Mission;
use App\Service\MissionService;

class MissionController{

    private MissionService $missionService;

    public function __construct()
    {
        $this->missionService = new MissionService();
    }
    public function handle(): void{
        if($_SERVER['REQUEST_METHOD'] !== "POST"){
             http_response_code(405);
             echo json_encode(value: [
                 'error' => 'Method Not allowed'
             ]);
            return;
        }

        // pego o json

        $jsonRaw = file_get_contents('php://input');
        $data = json_decode($jsonRaw, true);

        print_r($data);
        if(!$data || !isset($data['nameMission'], $data['descriptionMission'], $data['dateMission'], $data['dificulteMission'])){
            http_response_code(400);
            echo json_encode([
                'error' => 'Invalido'
            ]);

            return;
        }

        $service = new MissionService();
        $result = $service->createMission($data);


        if ($response['success'] === false) {
            echo json_encode([
                'error' => $response['error'] ?? $response['message'] ?? 'Erro desconhecido'
            ]);
            return;
    }

        // define atributtes for to do register mission.
        $data = [
            'name' => $_POST['nameMission'] ?? null,
            'descriptionMission' => $_POST['descriptionMission'] ?? null,
            'dateMission' => $_POST['dateMission'] ?? null,
            'dificulteMission' => $_POST['dificulteMission'] ?? null
        ];

        // instance object for give function for create
        $createMission = new MissionService();
        if($createMission->createMission($data)){
            echo "Create mission with sucess";
        }

    }
}