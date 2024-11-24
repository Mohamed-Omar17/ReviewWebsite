<?php
require_once('config.inc.php');
$mysqli = new mysqli(HOST, USER, PASSWORD, DB, PORT);

if ($mysqli -> connect_error) {
    die("Connection failed");
}

$game = $_POST['game'];
$name = $_POST['name'];
$review = $_POST['review'];
$score = $_POST['score'];

$sqlSelect = "SELECT COUNT(*) AS count FROM Reviews WHERE Game='$game' AND Name='$name'";
$result = $mysqli->query($sqlSelect);
$row = $result->fetch_assoc();

$sqlUpdate = "UPDATE Reviews SET Review='$review', Score=$score WHERE Game='$game' AND Name='$name'";
$sql = "INSERT INTO Reviews (Game, Name, Review, Score) VALUES ('$game', '$name', '$review', $score)";

if ($row['count'] > 0) {
    // Update query
    $stmt = $mysqli->prepare("UPDATE Reviews SET Review = ?, Score = ? WHERE Game = ? AND Name = ?");
    $stmt->bind_param("siss", $review, $score, $game, $name);
} else {
    // Insert query
    $stmt = $mysqli->prepare("INSERT INTO Reviews (Game, Name, Review, Score) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("sssi", $game, $name, $review, $score);
}

// Execute the query
if ($stmt->execute()) {
    echo "Review successfully posted!";
} else {
    echo "Error: " . $stmt->error;
}

//header("Location: showPaintings.php");
//exit();
header("Location: game-info.php?game=" . urlencode($game));
$mysqli->close();
?>