<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>XP Game Reviews</title>
    <link rel="icon" type="image/svg" href="../images/1.svg">
    <link rel="stylesheet" href="../css/homepage.css">
    <link rel="stylesheet" href="../css/header.css">
    <!-- Linking Google Fonts for Oswald and icons-->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=arrow_forward" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=arrow_back" />
</head>
<body>
<?php
        require_once('config.inc.php');
        $mysqli = new mysqli(HOST, USER, PASSWORD, DB, PORT);
    ?>
<div class="navigation-bar">
    <div class="nav-shell">
        <ul>
            <li class="game-logo">
                <img src=../images/1.svg alt="XP Review Logo"/>
            </li>
            <div id="title">
                XP Reviews
            </div>
            <div class="nav-toggle">
                <li class="link">
                    <a href="HomePage.php"> Home </a>
                </li>
                <li class="link">
                    <a href="gameList.php"> Game List </a>
                </li>
                <li class="link">
                    <a href="addReview.php">Add Review</a>
                </li>
            </div>
        </ul>
        <button class="menu-button">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
        </button>
    </div>
</div>

<div class="wrapper">
    <div class="top">VideoGames</div>
    <div class="bottom" aria-hidden="true">VideoGames</div>
</div>

<div class="introduction">
    <section id="introduction" class="hidden">
        <h2 id="intro-header">
            Welcome to XP Reviews
        </h2>

        <div class="introduction-container">
            <div id="intro-text">
                <p>Welcome to XP Reviews, your ultimate hub for all things gaming! Whether you're a die-hard fan of RPGs, an adrenaline-seeker chasing high-octane action, or a casual gamer looking for your next relaxing adventure, we've got you covered.</p>
                <br>
                <p>Dive into in-depth reviews, discover hidden gems, and stay updated on the latest releases. XP Reviews is more than
                    just a site—it's a community where gamers connect, explore, and celebrate their shared passion for gaming.</p>
            </div>
            <div id="intro-photo">
                <img src="../images/updown-pyramids-4k_1608815943-2048x1152.jpg" alt="Historic Team Photo">
            </div>
        </div>

    </section>

</div>
<h3>Iconic Wii Games</h3>
<div class="break-line">
    <hr>
</div>
    <div class="container">
        <img src="../images/back.png" alt="backbutton" class="backBtn">
        <div class="carousel">
            <ul class="card-list">
                <li class="card-item">
                    <a href="game-info.php?game=Super%20Mario%20Bros.%20Wii" class="card-link">
                        <img src="../images/Games/New_Super_mario.jpg" alt="New Super Mario Bros" class="card-image">
                        <p class="card-title">Super Mario Bros. Wii</p>
                        <button class="card-button material-symbols-rounded">arrow_forward</button>
                    </a>
                </li>
                <li class="card-item">
                    <a href="game-info.php?game=Mario%20and%20Sonic%20Vancouver%20Olympic%20Games" class="card-link">
                        <img src="../images/Games/Mario_&_Sonic.jpg" alt="Mario and Sonic Vancouver Olympic Games" class="card-image">
                        <p class="card-title">Mario and Sonic Vancouver Olympic Games</p>
                        <button class="card-button material-symbols-rounded">arrow_forward</button>
                    </a>
                </li>
                <li class="card-item">
                    <a href="game-info.php?game=Super%20Mario%20Galaxy" class="card-link">
                        <img src="../images/Games/SuperMarioGalaxy.jpg" alt="Super Mario Galaxy" class="card-image">
                        <p class="card-title">Super Mario Galaxy</p>
                        <button class="card-button material-symbols-rounded">arrow_forward</button>
                    </a>
                </li>
                <li class="card-item">
                    <a href="game-info.php?game=Wii Sports" class="card-link">
                        <img src="../images/Games/WiiSports.jpg" alt="Wii Sports" class="card-image">
                        <p class="card-title">Wii Sports</p>
                        <button class="card-button material-symbols-rounded">arrow_forward</button>
                    </a>
                </li>
                <li class="card-item">
                    <a href="game-info.php?game=Super%20Smash%20Bros " class="card-link">
                        <img src="../images/Games/SuperSmashBrosWii.jpg" alt="Super Smash Bros" class="card-image">
                        <p class="card-title">Super Smash Bros</p>
                        <button class="card-button material-symbols-rounded">arrow_forward</button>
                    </a>
                </li>
                <li class="card-item">
                    <a href="game-info.php?game=Donkey%20Kong%20Country%20Returns" class="card-link">
                        <img src="../images/Games/Donkey-Kong.jpg" alt="Donkey Kong" class="card-image">
                        <p class="card-title">Donkey Kong Country Returns</p>
                        <button class="card-button material-symbols-rounded">arrow_forward</button>
                    </a>
                </li>
                <li class="card-item">
                    <a href="game-info.php?game=Super%20Mario%20Galaxy%202" class="card-link">
                        <img src="../images/Games/MarioGalaxy2.jpg" alt="Mario Galaxy 2" class="card-image">
                        <p class="card-title">Super Mario Galaxy 2</p>
                        <button class="card-button material-symbols-rounded">arrow_forward</button>
                    </a>
                </li>
            </ul>
        </div>
        <img src="../images/next.png" alt="frontbutton" class="frontBtn">
    </div>

<h3>Storyline Games</h3>
<div class="break-line">
    <hr>
</div>
<div class="container">
    <img src="../images/back.png" alt="backbutton" class="backBtn">
    <div class="carousel">
        <ul class="card-list">
            <li class="card-item">
                <a href="game-info.php?game=Red%20Dead%20Redemption%20II" class="card-link">
                    <img src="../images/Games/RDR2.jpg" alt="Red Dead Redemption II" class="card-image">
                    <p class="card-title">Red Dead Redemption II</p>
                    <button class="card-button material-symbols-rounded">arrow_forward</button>
                </a>
            </li>
            <li class="card-item">
                <a href="game-info.php?game=Spider-Man" class="card-link">
                    <img src="../images/Games/Spider-Man.jpg" alt="SpiderMan" class="card-image">
                    <p class="card-title">Spider-Man</p>
                    <button class="card-button material-symbols-rounded">arrow_forward</button>
                </a>
            </li>
            <li class="card-item">
                <a href="game-info.php?game=Batman:%20Arkham%20City" class="card-link">
                    <img src="../images/Games/Batman_Arkham_City_Game_Cover.jpg" alt="Batman_Arkham City" class="card-image">
                    <p class="card-title">Batman: Arkham City</p>
                    <button class="card-button material-symbols-rounded">arrow_forward</button>
                </a>
            </li>
            <li class="card-item">
                <a href="game-info.php?game=Jedi%20Fallen%20Order" class="card-link">
                    <img src="../images/Games/Cover_art_of_Star_Wars_Jedi_Fallen_Order.jpg" alt="Jedi Fallen Order" class="card-image">
                    <p class="card-title">Jedi Fallen Order</p>
                    <button class="card-button material-symbols-rounded">arrow_forward</button>
                </a>
            </li>
            <li class="card-item">
                <a href="game-info.php?game=The%20Witcher%203:%20Wild%20Hunt" class="card-link">
                    <img src="../images/Games/Witcher_3_cover_art.jpg" alt="The Witcher 3: Wild Hunt" class="card-image">
                    <p class="card-title">The Witcher 3: Wild Hunt</p>
                    <button class="card-button material-symbols-rounded">arrow_forward</button>
                </a>
            </li>
            <li class="card-item">
                <a href="game-info.php?game=Spider-Man:%20Miles%20Morales" class="card-link">
                    <img src="../images/Games/Miles_Morales.jpg" alt="Miles Morales" class="card-image">
                    <p class="card-title">Spider-Man: Miles Morales</p>
                    <button class="card-button material-symbols-rounded">arrow_forward</button>
                </a>
            </li>
            <li class="card-item">
                <a href="game-info.php?game=Watch%20Dogs" class="card-link">
                    <img src="../images/Games/Watch_dogs.jpg" alt="Watch Dogs" class="card-image">
                    <p class="card-title">Watch Dogs</p>
                    <button class="card-button material-symbols-rounded">arrow_forward</button>
                </a>
            </li>
            <li class="card-item">
                <a href="game-info.php?game=God%20of%20War%202018" class="card-link">
                    <img src="../images/Games/God_OfWar_2018.jpg" alt="God of War 2018" class="card-image">
                    <p class="card-title">God of War 2018</p>
                    <button class="card-button material-symbols-rounded">arrow_forward</button>
                </a>
            </li>
            <li class="card-item">
                <a href="game-info.php?game=The%20Last%20of%20Us" class="card-link">
                    <img src="../images/Games/The_Last_of_Us_Part_I_cover.jpg" alt="Last Of Us" class="card-image">
                    <p class="card-title">Last of Us</p>
                    <button class="card-button material-symbols-rounded">arrow_forward</button>
                </a>
            </li>
        </ul>
    </div>
    <img src="../images/next.png" alt="frontbutton" class="frontBtn">
</div>

<h3>Shooter Games</h3>
<div class="break-line">
    <hr>
</div>
<div class="container">
    <img src="../images/back.png" alt="backbutton" class="backBtn">
    <div class="carousel">
        <ul class="card-list">
            <li class="card-item">
                <a href="game-info.php?game=Fortnite:%20Battle%20Royale" class="card-link">
                    <img src="../images/Games/Fortnite.jpg" alt="Fortnite" class="card-image">
                    <p class="card-title">Fortnite: Battle Royale</p>
                    <button class="card-button material-symbols-rounded">arrow_forward</button>
                </a>
            </li>
            <li class="card-item">
                <a href="game-info.php?game=Call%20of%20Duty:%20Black%20Ops%206" class="card-link">
                    <img src="../images/Games/CalOfDuty_BO6.jpg" alt="COD BO6" class="card-image">
                    <p class="card-title">Call of Duty: Black Ops 6</p>
                    <button class="card-button material-symbols-rounded">arrow_forward</button>
                </a>
            </li>
            <li class="card-item">
                <a href="game-info.php?game=Far%20Cry%206" class="card-link">
                    <img src="../images/Games/Far_cry_6_cover.jpg" alt="Far-Cry6" class="card-image">
                    <p class="card-title">Far Cry 6</p>
                    <button class="card-button material-symbols-rounded">arrow_forward</button>
                </a>
            </li>
            <li class="card-item">
                <a href="game-info.php?game=Call%20of%20Duty:%20MW" class="card-link">
                    <img src="../images/Games/CallOfDuty_ModernWarfare.jpg" alt="Call of Duty"  class="card-image">
                    <p class="card-title">Call of Duty: MW</p>
                    <button class="card-button material-symbols-rounded">arrow_forward</button>
                </a>
            </li>
            <li class="card-item">
                <a href="game-info.php?game=Halo%205:%20Guardians" class="card-link">
                    <img src="../images/Games/Halo_Guardians.png" alt="Halo 5" class="card-image">
                    <p class="card-title">Halo 5: Guardians</p>
                    <button class="card-button material-symbols-rounded">arrow_forward</button>
                </a>
            </li>
            <li class="card-item">
                <a href="game-info.php?game=Borderlands%203" class="card-link">
                    <img src="../images/Games/Borderlands_3_cover_art.jpg" alt="Borderlands 3" class="card-image">
                    <p class="card-title">Borderlands 3</p>
                    <button class="card-button material-symbols-rounded">arrow_forward</button>
                </a>
            </li>
            <li class="card-item">
                <a href="game-info.php?game=Call%20of%20Duty:%20Black%20Ops%20Cold%20War" class="card-link">
                    <img src="../images/Games/BOCW_Cover_Art.jpg" alt="Coldwar" class="card-image">
                    <p class="card-title">Call of Duty: Black Ops Cold War</p>
                    <button class="card-button material-symbols-rounded">arrow_forward</button>
                </a>
            </li>


        </ul>
    </div>
    <img src="../images/next.png" alt="frontbutton" class="frontBtn">
</div>

</body>
<script src="../Javascript/scroll.js"></script>
</html>
