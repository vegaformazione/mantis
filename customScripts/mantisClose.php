<?php
$servername = "localhost";
$username = "root";
$password = "p*28EIxrLomH%6ic6#Bn2SoNh";
$dbname = "mantis";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$result = $conn->query("SELECT mbt.id FROM mantis_bug_table as mbt WHERE mbt.status = 80 AND mbt.last_updated < UNIX_TIMESTAMP() - (60*60*24*7)");

while ($row = $result->fetch_assoc()) {
    $conn->query("INSERT INTO mantis_bugnote_table (bug_id,reporter_id,bugnote_text_id,last_modified,date_submitted) VALUES (" . $row['id'] . ",1,12739," . time() . "," . time() . ");");
    $conn->query("UPDATE mantis_bug_table SET status=90,last_updated=" . time() . " WHERE id=" . $row['id'] . ";");
}

$conn->close();
