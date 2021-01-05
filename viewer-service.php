<?php

//creating the database connection
$cloudhost = "themaster.cvlkj37zzksl.us-east-1.rds.amazonaws.com";
$usernames = "admin";
$password = "password";
$database = "themaster";



//creating the mysql connection
$conn = new mysqli($cloudhost, $usernames, $password, $database);


if ($result = $conn -> query("SELECT names, age, color, cookie, activity, rate, convert_tz(dt, '+00:00', '-05:00'), ip FROM testing_dba")) {
?>

<table>

<?php

while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row["names"] . "</td>";
    echo "<td>" . $row["age"] . "</td>";
    echo "<td>" . $row["color"] . "</td>";
    echo "<td>" . $row["cookie"] . "</td>";
    echo "<td>" . $row["activity"] . "</td>"
    echo "<td>" . $row["rate"] . "</td>"
    echo "<td>" . $row["dt"] . "</td>";
    echo "<td>" . $row["ip"] . "</td>";

    echo "</tr>";

}
?>

</table>

<?php
    $result -> free_result();
}

$conn -> close();
?>
