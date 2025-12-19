<?php

namespace src\DAO;

use MissionInterface;
use src\DAO\Connection\Connection;

class MissionDAO
{
    private $conn;

    public function __construct()
    {
        $db = new Connection();
        $this->conn = $db->getConnection();
    }

    public function createMission(Mission $mission): void{
        $sql = "INSERT INTO missions(nameMission, descriptionMission, dateMission, dificulteMission) VALUES(?,?,?,?)";
        $stmt = $this->conn->prepare($sql);

        $nameMission = $mission->getNameMission();
        $descriptionMission = $mission->getDescriptionMission();
        $dateMission = $mission->getDateMission();
        $dificulteMission = $mission->getDificulteMission();


        $stmt->bind_param("ssss", $nameMission, $descriptionMission, $dateMission, $dificulteMission);

        if ($stmt->execute()) {
            echo "Missão criada com sucesso!";
        }
    }

    public function readMission(Mission $mission): bool{

    }
}