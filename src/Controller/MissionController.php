<?php
use src\DAO\Mission;
use App\Service\MissionService;

class MissionController{

    public function handle(){
        if($_SERVER['REQUEST_METHOD'] !== "POST"){
            return; // config handle()
        }

        // define atributtes for to do register mission.
        $mission = new Mission(
            $_POST['nameMission'],
            $_POST['descriptionMission'],
            $_POST['dateMission'],
            $_POST['dificulte']
        );

        // instance object for give function for create
        $createMission = new MissionService();
        if($createMission->createMission($mission)){
            echo "Create mission with sucess";
        }

    }
}