<?php

//
namespace App\Service;


use src\DAO\MissionDAO;
use src\Model\Mission;
class MissionService{
    private $missionDAO;

    public function __construct(){
       $this->missionDAO = new MissionDAO();
    }
    public function createMission(array $data)
    {
        $name = trim((string) ($data['nameMission'] ?? ''));
        $description = trim((string) ($data['descriptionMission'] ?? ''));
        $date = trim((string) ($data['dateMission'] ?? ''));
        $difficulty = trim((string) ($data['dificulteMission'] ?? ''));

        if (empty($name) || empty($description) || $date === '' || empty($difficulty)) {
            return [
                'success' => false,
                'error' => 'preencha todos os campos'
            ];
        }
        $mission = new Mission(
            $name,
            $description,
            $date,
            $difficulty
        );

        if ($this->missionDAO->createMission($mission)) {
            return [
                'success' => true,
                'mission' => 'Mission created'
            ];
        }

        return [
            'success'=> false,
            'message' => 'Mission exists'
        ];
    }


}