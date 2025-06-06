<!DOCTYPE html>
<html>
    <head>
        <title>Game Information</title>
        <meta charset="UTF-8">
        <link rel="icon" type="image/svg" href="../images/1.svg">
        <!-- Stylesheet -->
        <link rel="stylesheet" href="..\css\gameInfo.css">
        <link rel="stylesheet" href="..\css\header.css">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;700&display=swap" rel="stylesheet">
    </head>
    <body>
        <!-- Header -->
    <div class="navigation-bar">
        <div class="nav-shell">
            <ul>
                <li class="game-logo">
                    <img src="../images/1.svg" alt="XP Review Logo"/>
                </li>
                <div id="title">
                    XP Reviews: Games List
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

        <!-- colored Background -->
        <div class="colored-background"></div>

        <!-- Game Info Main Card -->
    <div id="reviewBody">
        <?php
            if (isset($_GET['game'])) {
                $gameName = htmlspecialchars($_GET['game']);
                // Use $gameName in your queries or logic
            }

            require_once('config.inc.php');

            $mysqli = new mysqli(HOST, USER, PASSWORD, DB, PORT);
            $SQLReviewCount = "SELECT COUNT(*) AS count FROM Reviews WHERE Game = '$gameName'";
            $SQL="SELECT * FROM Reviews WHERE Game = '$gameName'";
            $SQLImage="SELECT * FROM GameNames WHERE Game = '$gameName'";
            $SQLAvg = "SELECT AVG(Score) AS AverageScore FROM Reviews WHERE Game = '$gameName'";

            $result = $mysqli->query($SQLImage);
        ?>
        <!-- conatiner div -->
        <div class="game-container">
            <!-- Video/Image of Game -->
            <div>
                <?php
                if ($result) {
                    while ($obj=$result->fetch_object()) {
                        if (isset($obj->ImageData)) {
                            echo "<img src='" .$obj->ImageData. "' alt='Game Image' class='card-image'>";
                        } else {
                            echo "No image available";
                        }
                    }
                    $result -> free_result();
                }
                ?>

            </div>

            <!-- Information Container -->
            <div class="game-info-container">
                <!-- Headings -->
                <div class="heading-info">
                    <?php echo "<h1>". $gameName . "</h1>"; ?>
                    <!-- <div>
                        <p>XBOX 360</p>
                        <button>View all Platforms</button>
                    </div>
                    <p><strong>Released on:</strong> Oct 18th, 2011</p> -->

                    <hr>

                </div>

                <!-- General Reviews -->
                <div class="review">

                    <!-- review text -->
                    <div>
                        <?php
                        $result = $mysqli->query($SQLReviewCount);
                        $row = $result->fetch_assoc();
                        $count = $row['count'];

                        $result = $mysqli->query($SQLAvg);
                        if ($result) {
                            $row = $result->fetch_assoc();
                            if (is_null($row['AverageScore']))    {
                                $averageScore = null;
                            }
                            else {
                                $averageScore = round($row['AverageScore']);
                            }
                        } else {
                            echo "Error calculating average.";
                        }
                        ?>
                        <p>USER SCORE</p>
                        <?php
                        if ($averageScore > 85) {
                            echo "<p>Must Play</p>";
                        }
                        else if ($averageScore>=75 && $averageScore<=85) {
                            echo "<p>Great</p>";
                        }
                        else if ($averageScore >=50 && $averageScore <= 74) {
                            echo "<p>Good</p>";
                        }
                        else if ($averageScore <= 49 && $averageScore >= 25) {
                            echo "<p>Dreadful</p>";
                        }
                        else if (is_null($row['AverageScore'])) {
                            echo "<p></p>";
                        }
                        else if ($averageScore <= 24 && $averageScore >= 0) {
                            echo "<p>Stay away</p>";
                        }
                        ?>
                        <!-- <p>Generally Favourable</p> -->
                        <a href="#user-reviews-section">Based on <?php echo $count; ?> reviews</a>
                    </div>

                    <!-- Game Score -->
                    <div>
                        <?php
                        $result = $mysqli->query($SQLAvg);
                        if ($result) {
                            $row = $result->fetch_assoc();
                            if (is_null($row['AverageScore']))    {
                                echo "<p>No Reviews</p>";
                            }
                            else {
                                echo $averageScore;
                            }
                        } else {
                            echo "Error calculating average.";
                        }
                        ?>
                    </div>

                </div>

                <!-- <div class="review">

                     review text -->
                    <!-- <div>
                        <p>EXPERT SCORE</p>
                        <p>Amazing</p>
                        <p>Reviewed By: Ayaan Ahmed</p>
                    </div>

                     Game Score -->
                    <!-- <div class="game-score">
                        94
                    </div>  

                </div> -->

                <!-- Your Review -->
                <!-- <div class="your-review">
                    <label for="your-score">YOUR SCORE:</label>
                    <select id="your-score">
                        <option value="" disabled selected>Choose:</option>
                        <option value="amazing">Amazing!</option>
                        <option value="ok">OK.</option>
                        <option value="bad">Bad.</option>
                    </select>
                
                </div> -->
            </div>
        </div>

        <!-- Game Description -->
        <div class="game-desc-container">
            <hr>
            <p>
                <?php
                $SQLGameSummary="SELECT * FROM GameNames WHERE Game = '$gameName'";
                $result = $mysqli->query($SQLGameSummary);

                if ($result) {
                    while ($obj=$result->fetch_object()) {
                        if (isset($obj->GameSummary)) {
                            echo "<h2>Summary</h2>";
                            echo "<p>".$obj->GameSummary."</p>";
                        } else {
                            echo "No image available";
                        }
                    }
                    $result -> free_result();
                }
                ?>
            </p>
            <hr>
        </div>

        <!-- User Reviews -->

        <!-- Grid Div -->
                <!-- User Score -->
                <?php
                if ($result = $mysqli->query($SQLReviewCount)) {
                    $row = $result->fetch_assoc();
                    if ($row ['count'] > 0) {
                        echo "<div id='reviewHeader'>";
                        echo "<h2>Reviews</h2>";
                        echo "</div>";
                        if ($output = $mysqli -> query($SQL)) {
                            echo "<div class='review-grid' id='user-reviews-section'>";
                            while ($obj=$output->fetch_object()) {
                                echo "<div class='user-review-container'>";
                                    echo "<div>";
                                    echo "<p class='game-score'>$obj->Score</p>";
                                    echo "</div>";
                                    echo "<div class='wordWrap'>";
                                        //Username
                                    echo "<p>" . $obj->Name . "</p>";
                        
                                        //Review
                                    
                                    echo "<p>".$obj->Review. "</p>";
                                    
                                    echo "</div>";
                                echo "</div>";
                            }
                            echo "</div>";
                            $output -> free_result();
                        }
                    }
                    else {
                        echo "<div id='reviewHeader'>";
                        echo "<h2>Be the first to review this game!</h2>";
                        echo "</div>";
                    }
                }?>    
            <!--<div class="user-review-container">
                User Score
                <div class="game-score">
                    54
                </div>
    
                Container for Username and Comment
                <div>
                    Username
                    <p>Mohammed</p>
    
                    Review
                    <p>
                        Batman: Arkham City is an exhilarating open-world adventure, delivering 
                        a gripping narrative and fast-paced combat. The vast city is full of secrets 
                        and challenges, making it a must-play for any fan of the Dark Knight.
                    </p>
                </div>
            </div>-->

        </div>
        </div>            
        <script>

        </script>

    </body>
</html>