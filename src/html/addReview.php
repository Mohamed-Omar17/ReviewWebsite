<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>XP Game Reviews</title>
     <link rel="icon" type="image/svg" href="../images/1.svg">
    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/css/addReview.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>
<div class="navigation-bar">
        <div class="nav-shell">
            <ul>
                <li class="otr-logo">
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
    <?php
        require_once('config.inc.php');

        $mysqli = new mysqli(HOST, USER, PASSWORD, DB, PORT);

        $SQL="SELECT Game FROM GameNames ORDER BY Game";
        

        ?>
        <div id="reviewContainer">
            <div id="reviewBox">
                <form action="postReview.php" method="POST" id="flexReview"><?php
                    echo '<label for="Game">Game Title: </label>';
                    echo '<select id="game" name="game" required><br /><br />';
                    if ($result = $mysqli -> query($SQL)) {
                        while ($obj=$result->fetch_object()) {
                            echo "<option value='$obj->Game'>$obj->Game</option><br>";
                        }
                        $result -> free_result();
                    }
                    echo '</select><br /><br />';
                    ?>
                    <label for="name">Reviewer: </label>
                    <input type="text" id="name" name="name" required><br /><br />
                    <label for="review">Review: </label>
                    <input type="text" id="review" name="review" required><br /><br />
                    <label for="score">Score: </label>
                    <input type="number" step="1" id="score" name="score" min="0" max="100" required><br /><br />
                    <input type="submit">
                </form>
            </div>
        </div>
</body>
</html>