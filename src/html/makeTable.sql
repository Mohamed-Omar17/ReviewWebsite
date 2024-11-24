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
    Publisher VARCHAR(255) NOT NULL,
    ImageData VARCHAR(255), 
    GameSummary VARCHAR(255),
);
INSERT INTO GameNames (Game, Publisher, ImageData, GameSummary)
VALUES
    ('Super Mario Bros. Wii', 'Nintendo', '../images/GameInfoImages/SuperMarioBrosWii.jpg', 'A classic side-scrolling platformer featuring Mario, Luigi, Princess Peach, and Toad as they battle through vibrant levels to save the Mushroom Kingdom from Bowser. The game introduces cooperative multiplayer for the first time in the series.'),
    ('Mario and Sonic Vancouver Olympic Games', 'Nintendo', '../images/GameInfoImages/MarioAndSonicAtTheOlympicGames.jpg', 'A sports party game where players control Mario, Sonic, and other characters from their respective franchises to compete in various Olympic events. It features both traditional and wacky mini-games set in Vancouver during the 2010 Winter Olympics.'),
    ('Super Mario Galaxy', 'Nintendo', '../images/GameInfoImages/SuperMarioGalaxy.jpg'),
    ('Wii Sports', 'Nintendo', '../images/GameInfoImages/WiiSports.jpg'),
    ('Super Smash Bros', 'Nintendo', '../images/GameInfoImages/SuperSmashBros.jpg'),
    ('Donkey Kong Country Returns', 'Nintendo', '../images/GameInfoImages/DonkeyKongCountryReturns.jpg'),
    ('Super Mario Galaxy 2', 'Nintendo', '../images/GameInfoImages/SuperMarioGalaxy.jpg'),
    ('Red Dead Redemption II', 'Rockstar Games', '../images/GameInfoImages/RedDeadRedemption.jpg'),
    ('Spider-Man', 'Sony Interactive Entertainment', '../images/GameInfoImages/SpiderMan.jpg'),
    ('Batman: Arkham City', 'Warner Bros. Interactive Entertainment', '../images/GameInfoImages/BatmanArkhamCity.jpg'),
    ('Jedi Fallen Order', 'Electronic Arts', '../images/GameInfoImages/JediFallenOrder.jpg'),
    ('The Witcher 3: Wild Hunt', 'CD Projekt', '../images/GameInfoImages/TheWitcher3WildHunt.jpg'),
    ('Spider-Man: Miles Morales', 'Sony Interactive Entertainment', '../images/GameInfoImages/MarvelsSpiderManMilesMorales.jpg'),
    ('Watch Dogs', 'Ubisoft', '../images/GameInfoImages/WatchDogs.jpg'),
    ('God of War 2018', 'Sony Interactive Entertainment', '../images/GameInfoImages/GodOfWar.jpg'),
    ('Fortnite: Battle Royale', 'Epic Games', '../images/GameInfoImages/Fortnite.jpg'),
    ('Call of Duty: Black Ops 6', 'Activision', '../images/GameInfoImages/CallOfDutyBlackOps6.jpg'),
    ('Far Cry 6', 'Ubisoft', '../images/GameInfoImages/FarCry6.jpg'),
    ('Call of Duty: MW', 'Activision', '../images/GameInfoImages/CallOfDutyModernWarfare.jpg'),
    ('Halo 5: Guardians', 'Microsoft', '../images/GameInfoImages/Halo5.jpg'),
    ('Borderlands 3', '2K Games', '../images/GameInfoImages/Borderlands3.jpg'),
    ('Call of Duty: Black Ops Cold War', 'Activision', '../images/GameInfoImages/BlackOpsColdWar');
