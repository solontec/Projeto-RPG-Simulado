<?php


namespace src\Model;
class Mission{
    public $nameMission;
    public $descriptionMission;
    public $dateMission;
    public $dificulteMission;

    public function __construct( $nameMission, string $descriptionMission, $dateMission, $dificulteMission){
        $this->nameMission = $nameMission;
        $this-> descriptionMission = $descriptionMission;
        $this->dateMission = $dateMission;
        $this->dificulteMission = $dificulteMission;

    }

    public function getNameMission(){
        return $this->nameMission;
    }

    public function getDescriptionMission(){
        return $this->descriptionMission;
    }

    public function getDateMission(){
        return $this->dateMission;
    }

    public function getDificulteMission(){
        return $this->dificulteMission;
    }


}