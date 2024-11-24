drop database if exists Reviews;

create database Reviews;
USE Reviews;

CREATE TABLE Reviews.Reviews (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    Game VARCHAR(255),
    Name VARCHAR(255) NOT NULL,
    Review VARCHAR(255) NOT NULL,
    Score FLOAT NOT NULL
);

CREATE TABLE Reviews.GameNames (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    Game VARCHAR(255) NOT NULL,
    Publisher VARCHAR(255) NOT NULL
);
INSERT INTO GameNames (
    Game, Publisher
)
VALUES ('Mario Odyssey', 'Nintendo'), ('Call of Duty', 'Activision'), ('Fortnite', 'Epic Games'), ('Super Mario Bros.Wii', 'Nintendo');

