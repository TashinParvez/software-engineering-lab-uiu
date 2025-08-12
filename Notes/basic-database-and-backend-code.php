<?php

// ========================= database Connetion =========================

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

// ========================= basic =========================

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

// ========================= Insert DATA =========================

$sql = "INSERT INTO `course` (`course_id`, `title`) VALUES ('1542', 'OS');";

// ========================= foreach loop =========================

$sql = "SELECT * FROM `course` WHERE 1;";
$result = mysqli_query($conn, $sql);
$result = mysqli_fetch_all($result, MYSQLI_ASSOC);
// $result = mysqli_fetch_all($result, MYSQLI_NUM);   // for [0]

foreach ($result as $row) {
    echo "course id: " . $row["course_id"] . " - title: " . $row["title"] . "<br>";
}

// ========================= UPDATE =========================

$sql = "UPDATE course SET `course_id`='4001' WHERE `title` = 'SPL'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

// ========================= DELETE =========================

$sql = "DELETE FROM course WHERE `course_id` = '12121212'";

// ======================================================

$conn->close();
