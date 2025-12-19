<?php

//
namespace App\Service;

use http\Exception\InvalidArgumentException;
use src\DAO\MissionDAO;
use src\DAO\Mission;
class MissionService{
    private $missionDAO;

    public function __construct(){
       $this->dao = new MissionDAO();
    }

    public function createMission(Mission $mission): bool{

        if(empty($mission->getNameMission()) || empty($mission->getDescriptionMission()) || empty($mission->getDateMission()) || empty($mission->getDificulteMission())){
            throw new InvalidArgumentException('This is necessary to insert all fields');
        }

        // expression used for represent exception.

        if($mission->getDateMission() < date("Y-m-d")){
            throw new InvalidArgumentException('This is necessary to insert the date of manner correct');
        }

        return $this->dao->createMission($mission);

    }

    public function updateMission(Mission $mission): bool{
        return 0;
    }

    public function deleteMission(Mission $mission): bool{
        return 0;
    }


}