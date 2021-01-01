<?php

$cloudhost = "themaster.cvlkj37zzksl.us-east-1.rds.amazonaws.com";
$username = "admin";
$password = "password";
$database = "themaster";


$conn = new mysqli($cloudhost, $username, $password, $database);


if ($result = $conn -> query("SELECT studentID, grades FROM testing_dba")) {
?>

<table>

<?php

while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row["studentID"] . "</td>";
    echo "<td>" . $row["grades"] . "</td>";
    echo "</tr>";
}
?>

</table>

<?php
    $result -> free_result();
}

$conn -> close();
?>