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

// ======================= Show course data in a table =================================

$sql = "SELECT * FROM `course` WHERE 1;";
$result = $conn->query($sql);

echo "<table border=\"1\"> <thead><td>Course ID</td><td>Course Name</td></thead><tbody>";

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {

        echo "<tr>";
        echo "<td>";
        echo "" . $row["course_id"] . "";
        echo "</td>";

        echo "<td>";
        echo "" . $row["title"] . "";
        echo "</td>";
        echo "</tr>";
    }
} else {
    echo "0 results";
}

echo "</tbody></table>";

// =========================================================================================






$conn->close();
