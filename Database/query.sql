CREATE DATABASE IF NOT EXISTS RPG;
use RPG;

SELECT * FROM usuarios;
CREATE TABLE IF NOT EXISTS usuarios(
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50),
    email VARCHAR(100),
    password VARCHAR(100)
);

CREATE TABLE IF NOT EXISTS missions(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nameMission VARCHAR(100),
    descriptionMission VARCHAR(300),
    dateMission DATETIME NOT NULL,
    dificulteMission ENUM('easy', 'medium', 'hard', 'expert')

);