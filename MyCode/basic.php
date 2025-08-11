<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "spring2025_assignment";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM `course` WHERE 1;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "course id: " . $row["course_id"] . " - title: " . $row["title"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
