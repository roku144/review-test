<?php

date_default_timezone_set('US/Eastern');

$cloudhost = "themaster.cvlkj37zzksl.us-east-1.rds.amazonaws.com";
$usernames = "admin";
$password = "password";
$database = "themaster";



$conn = new mysqli($cloudhost, $usernames, $password, $database);

if ($conn -> connect_errno) {
    die("Failed to connect to MySQL: " . $conn -> connect_error);
}

$names = $_POST["names"];
$grades = $_POST["grades"];

$color = $_POST["color"];
$cook= $_POST["cook"];
$act = $_POST["act"];
$star = $_POST["star"];

//creating the individual date and time sent$dt=date("F j, Y, g:i a");

$ip=$_SERVER['REMOTE_ADDR'];

echo($names);
echo($grades);
echo($color);
echo($cook);
echo($act);
echo($star);

$stmt = $conn->prepare ("INSERT INTO testing_dba (names, age, color, cookie, activity, rate, ip) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sisssis", $names, $grades, $color, $cook, $act, $star, $ip);
$stmt->execute();

?>
