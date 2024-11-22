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
    $mysqli->query($sqlUpdate);
} else {
    $mysqli->query($sql);
}

//header("Location: showPaintings.php");
//exit();
header("Location: reviews.php?game=" . urlencode($game));
$mysqli->close();
?>