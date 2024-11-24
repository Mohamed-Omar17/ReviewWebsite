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
INSERT INTO GameNames (Game, Publisher)
VALUES
    ('Super Mario Bros. Wii', 'Nintendo'),
    ('Mario and Sonic Vancouver Olympic Games', 'Nintendo'),
    ('Super Mario Galaxy', 'Nintendo'),
    ('Wii Sports', 'Nintendo'),
    ('Super Smash Bros', 'Nintendo'),
    ('Donkey Kong Country Returns', 'Nintendo'),
    ('Super Mario Galaxy 2', 'Nintendo'),
    ('Red Dead Redemption II', 'Rockstar Games'),
    ('Spider-Man', 'Sony Interactive Entertainment'),
    ('Batman: Arkham City', 'Warner Bros. Interactive Entertainment'),
    ('Jedi Fallen Order', 'Electronic Arts'),
    ('The Witcher 3: Wild Hunt', 'CD Projekt'),
    ('Spider-Man: Miles Morales', 'Sony Interactive Entertainment'),
    ('Watch Dogs', 'Ubisoft'),
    ('God of War 2018', 'Sony Interactive Entertainment'),
    ('Fortnite: Battle Royale', 'Epic Games'),
    ('Call of Duty: Black Ops 6', 'Activision'),
    ('Far Cry 6', 'Ubisoft'),
    ('Call of Duty: MW', 'Activision'),
    ('Halo 5: Guardians', 'Microsoft'),
    ('Borderlands 3', '2K Games'),
    ('Call of Duty: Black Ops Cold War', 'Activision');
