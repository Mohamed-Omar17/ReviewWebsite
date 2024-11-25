DROP DATABASE IF EXISTS Reviews;

CREATE DATABASE Reviews;
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
    GameSummary TEXT,
    CoverImageData VARCHAR(255)
);

INSERT INTO Reviews.GameNames (Game, Publisher, ImageData, GameSummary, CoverImageData)
VALUES
    ('Super Mario Bros. Wii', 'Nintendo', '../images/GameInfoImages/SuperMarioBrosWii.jpg', 'A classic side-scrolling platformer featuring Mario, Luigi, Princess Peach, and Toad as they battle through vibrant levels to save the Mushroom Kingdom from Bowser. The game introduces cooperative multiplayer for the first time in the series.', '../images/Games/New_Super_mario.jpg'),
    ('Mario and Sonic Vancouver Olympic Games', 'Nintendo', '../images/GameInfoImages/MarioAndSonicAtTheOlympicGames.jpg', 'A sports party game where players control Mario, Sonic, and other characters from their respective franchises to compete in various Olympic events. It features both traditional and wacky mini-games set in Vancouver during the 2010 Winter Olympics.', '../images/Games/Mario_&_Sonic.jpg'),
    ('Super Mario Galaxy', 'Nintendo', '../images/GameInfoImages/SuperMarioGalaxy.jpg', 'A 3D platformer where Mario ventures across planets in space, each with unique gravitational forces and challenges. The game offers innovative gameplay mechanics and a captivating story, all wrapped in a charming, cosmic adventure.', '../images/Games/SuperMarioGalaxy.jpg'),
    ('Wii Sports', 'Nintendo', '../images/GameInfoImages/WiiSports.jpg', "A collection of sports simulations, including tennis, bowling, golf, baseball, and boxing, designed to showcase the Wii console's motion-sensing controls. It became one of the best-selling games of all time, emphasizing casual play and fun multiplayer experiences.", '../images/Games/WiiSports.jpg'),
    ('Super Smash Bros', 'Nintendo', '../images/GameInfoImages/SuperSmashBros.jpg', "A crossover fighting game that brings together iconic characters from Nintendo's vast roster. Players battle in dynamic, multi-level arenas using unique moves and items. Its fast-paced combat and competitive multiplayer make it a fan favorite.", '../images/Games/SuperSmashBrosWii.jpg'),
    ('Donkey Kong Country Returns', 'Nintendo', '../images/GameInfoImages/DonkeyKongCountryReturns.jpg', "A revival of the classic Donkey Kong Country series, this side-scrolling platformer features Donkey Kong and Diddy Kong as they attempt to recover stolen bananas from a group of evil Tikis. The game offers challenging platforming action with new mechanics and co-op gameplay.", '../images/Games/Donkey-Kong.jpg'),
    ('Super Mario Galaxy 2', 'Nintendo', '../images/GameInfoImages/MarioGalaxy2.png', "The direct sequel to Super Mario Galaxy, this game builds on its predecessor's innovative gravity-based mechanics, offering new power-ups, characters, and levels. Players journey through new galaxies in an attempt to rescue Princess Peach from Bowser once again.", '../images/Games/MarioGalaxy2.jpg'),
    ('Red Dead Redemption II', 'Rockstar Games', '../images/GameInfoImages/RedDeadRedemption.jpg', "An open-world action-adventure game set in the American frontier during the late 1800s. Players take on the role of Arthur Morgan, a member of the Van der Linde gang, as they navigate a vast, immersive world filled with gunfights, moral choices, and compelling narrative-driven gameplay.", '../images/Games/RDR2.jpg'),
    ('Spider-Man', 'Sony Interactive Entertainment', '../images/GameInfoImages/SpiderMan.jpg', "An action-packed open-world superhero game where players control Peter Parker as Spider-Man. The game features fluid combat, a gripping story, and the ability to freely swing around New York City while battling classic villains like the Kingpin and Vulture.", '../images/Games/Spider-Man.jpg'),
    ('Batman: Arkham City', 'Warner Bros. Interactive Entertainment', '../images/GameInfoImages/BatmanArkhamCity.jpg', "An open-world action-adventure game where Batman is trapped within a massive prison district, Arkham City. The game combines stealth, hand-to-hand combat, and puzzle-solving, allowing players to experience the Dark Knight's iconic gadgets and combat skills in a gritty Gotham environment.", '../images/Games/Batman_Arkham_City_Game_Cover.jpg'),
    ('Jedi Fallen Order', 'Electronic Arts', '../images/GameInfoImages/JediFallenOrder.jpg', "An action-adventure game set in the Star Wars universe. Players control Cal Kestis, a young Jedi Padawan who survived the execution of Order 66. The game features exploration, lightsaber combat, and puzzle-solving as Cal tries to rebuild the Jedi Order and escape the Empire's pursuit.", '../images/Games/Cover_art_of_Star_Wars_Jedi_Fallen_Order.jpg'),
    ('The Witcher 3: Wild Hunt', 'CD Projekt', '../images/GameInfoImages/Witcher 3.jpg', "A critically acclaimed open-world RPG where players control Geralt of Rivia, a monster hunter, as he searches for his adopted daughter while navigating a war-torn world. The game features deep storylines, complex character interactions, and a vast, detailed world filled with quests.", '../images/Games/Witcher_3_cover_art.jpg'),
    ('Spider-Man: Miles Morales', 'Sony Interactive Entertainment', '../images/GameInfoImages/MarvelsSpiderManMilesMorales.jpg', "The follow-up to the 2018 Spider-Man game, this title focuses on Miles Morales as the new Spider-Man. Set during Christmas in New York, the game features new powers, a unique combat style, and an emotional story as Miles learns to embrace his role as a hero.", '../images/Games/Miles_Morales.jpg'),
    ('Watch Dogs', 'Ubisoft', '../images/GameInfoImages/WatchDogs.jpg', "An open-world action game where players take control of Aiden Pearce, a hacker with a personal vendetta, as he navigates through Chicago's surveillance system. Players can manipulate the city's infrastructure, steal data, and use hacking as a weapon in an action-packed storyline.", '../images/Games/Watch_dogs.jpg'),
    ('God of War 2018', 'Sony Interactive Entertainment', '../images/GameInfoImages/GodOfWar.jpg', "A reboot of the God of War series, this game follows Kratos as he and his son Atreus embark on a journey to scatter the ashes of his wife. Set in the world of Norse mythology, the game features intense combat, puzzles, and a heartfelt father-son relationship.", '../images/Games/God_OfWar_2018.jpg'),
    ('Fortnite: Battle Royale', 'Epic Games', '../images/GameInfoImages/Fortnite.jpg', "A free-to-play battle royale game where 100 players fight to be the last person standing. Players can build structures, find weapons, and engage in fast-paced, ever-changing combat on an island. The game's frequent updates and events keep it fresh and popular among gamers worldwide.", '../images/Games/Fortnite.jpg'),
    ('Call of Duty: MW', 'Activision', '../images/GameInfoImages/CallOfDutyModernWarfare.jpg', "A reboot of the popular Modern Warfare series, this first-person shooter focuses on realistic military combat and an intense campaign. The game features a variety of multiplayer modes, including the popular Warzone battle royale mode, and cutting-edge graphics.", '../images/Games/CallOfDuty_ModernWarfare.jpg'),
    ('Far Cry 6', 'Ubisoft', '../images/GameInfoImages/FarCry6.jpg', "An open-world first-person shooter set on the fictional island of Yara, where players control guerrilla fighter Dani Rojas, aiming to overthrow a dictatorship. The game features large-scale battles, a variety of weapons, and a dynamic world to explore.", '../images/Games/Far_cry_6_cover.jpg'),
    ('Call of Duty: Black Ops 6', 'Activision', '../images/GameInfoImages/CallOfDutyBlackOps6.jpg', "A first-person shooter featuring intense multiplayer action and an immersive single-player campaign. Players experience futuristic combat with new weapons, tools, and abilities. The game's online modes, including Zombies and competitive multiplayer, have made it a mainstay in the series.", '../images/Games/CalOfDuty_BO6.jpg'),
    ('Halo 5: Guardians', 'Microsoft', '../images/GameInfoImages/Halo5.jpg', "A first-person shooter set in the Halo universe, where players take on the role of Master Chief and Spartan Locke. The game features an engaging campaign and competitive multiplayer modes with fast-paced action and new mechanics in the iconic Halo series.", '../images/Games/Halo_Guardians.png'),
    ('Borderlands 3', '2K Games', '../images/GameInfoImages/Borderlands3.jpg', "A loot-driven, open-world first-person shooter set on the planet Pandora. Players take on the role of one of four 'Vault Hunters,' each with unique abilities, to defeat enemies and uncover treasure. The game is known for its humor, colorful art style, and extensive weapon variety.", '../images/Games/Borderlands_3_cover_art.jpg'),
    ('Call of Duty: Black Ops Cold War', 'Activision', '../images/GameInfoImages/BlackOpsColdWar', "A first-person shooter set during the Cold War, featuring intense campaigns and multiplayer modes. Players take on the role of elite operatives, navigating through espionage and secret operations in a battle for global power. The game also introduces new Zombies modes and a battle royale experience.", '../images/Games/BOCW_Cover_Art.jpg'),
    ('The Last of Us', 'Sony', '../images/GameInfoImages/LastOfUs.jpg', "The Last of Us is a post-apocalyptic action-adventure game that follows Joel and Ellie as they navigate a world ravaged by a fungal outbreak, forming a deep bond while facing human and infected threats.", '../images/Games/The_Last_of_Us_Part_I_cover.jpg');
INSERT INTO Reviews.Reviews (Game, Name, Review, Score)
VALUES
    ('God of War 2018', 'Younes', 'Great combat, very responsive', 83),
    ('The Last of Us', 'Mohamed', 'Best story in a video game ever', 95),
    ('Super Mario Galaxy', 'Rayan', 'Nostalgic, love the gameplay', 93),
    ('Call of Duty: MW', 'Zach', "I absolutely hate this game, its awful, horrendous, dreadful, don't spend your money on it", 20);
