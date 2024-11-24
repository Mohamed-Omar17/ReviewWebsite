
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>XP Game Reviews</title>
    <link rel="stylesheet" href="/css/header.css">
    <link rel="icon" type="image/svg" href="../images/1.svg">
    <link rel="stylesheet" href="/css/gameList.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="navigation-bar">
        <div class="nav-shell">
            <ul>
                <li class="otr-logo">
                    <img src=../images/1.svg alt="XP Review Logo"/>
                </li>
                <div id="title">
                    XP Reviews: Games List
                </div>
                <div class="nav-toggle">
                    <li class="link">
                        <a href="HomePage.php"> Home </a>
                    </li>
                    <li class="link">
                        <a href="gameList.php"> Game Reviews </a>
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
</body>
<?php

if (isset($_GET['game'])) {
    $gameName = htmlspecialchars($_GET['game']);
    // Use $gameName in your queries or logic
}

require_once('config.inc.php');

$mysqli = new mysqli(HOST, USER, PASSWORD, DB, PORT);
$SQLReviewCount = "SELECT COUNT(*) AS count FROM Reviews WHERE Game = '$gameName'";
$SQL="SELECT * FROM Reviews WHERE Game = '$gameName'";
$SQLAvg = "SELECT AVG(Score) AS AverageScore FROM Reviews WHERE Game = '$gameName'";

$result = $mysqli->query($SQLAvg);

if ($result) {
    $row = $result->fetch_assoc();
    $averageScore = $row['AverageScore'];
} else {
    echo "Error calculating average.";
}
$result->free_result();

if ($mysqli -> connect_error) {
    die("Connection failed");
}

if ($result = $mysqli->query($SQLReviewCount)) {
    $row = $result->fetch_assoc();
    if ($row ['count'] > 0) {
        if ($output = $mysqli -> query($SQL)) {
            echo "<h1>Game: " . $gameName . " | Average: " . $averageScore . "</h1>";
            echo "<p class='center'> Reviews </p>";
            while ($obj=$output->fetch_object()) {
                echo "<div class='reviewContainer'>";
                echo "<p>$obj->Name</p>";
                echo "<p>$obj->Review</p>";
                echo "<p>$obj->Score</p>";
                echo "</div>";
            }
            echo "<button><a href='addReview.php'>Add new Review</a></button>";
            $output -> free_result();
        }
    }
    else {
        echo 'No reviews have been posted for this game.';
    }
}

echo "<button><a href='HomePage.php'>Go home</a></button>"
?>
