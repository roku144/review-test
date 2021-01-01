<?php

$cloudhost = "themaster.cvlkj37zzksl.us-east-1.rds.amazonaws.com";
$username = "admin";
$password = "password";
$database = "themaster";

$conn = new mysqli($cloudhost, $username, $password, $database);

if ($conn -> connect_errno) {
    die("Failed to connect to MySQL: " . $conn -> connect_error);
}

$studentID = $_POST["studentID"];
$grades = $_POST["grades"];

$stmt = $conn->prepare ("INSERT INTO testing_dba (studentID, grades) VALUES (?, ?)");
$stmt->bind_param("id", $studentID, $grades);
$stmt->execute();

?>