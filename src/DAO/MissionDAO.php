<?php

namespace src\DAO;

use MissionInterface;
use src\DAO\Connection\Connection;

class MissionInterfaceDAO implements MissionInterface
{
    private $conn;

    public function __construct()
    {
        $db = new Connection();
        $this->conn = $db->getConnection();
    }

    public function createMission(MissionInterface $mission): void
    {
        $sql = "INSERT INTO mission(nameMission, descriptionMission, dateMission, dificulteMission) VALUES(?,?,?,?)";
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
}