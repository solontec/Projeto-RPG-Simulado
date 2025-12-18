<?php

interface Mission{
    public function createMission(Mission $mission); // criar missão
    public function readMission();
    public function deleteMission(); // deletar missão
    public function updateMission(); // atualizar missao

}