<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "spring2025_assignment";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    // echo "OK OK";
}

//  =============================== QSN 4 ==============


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $id = $_POST['id'];

    $sql = "DELETE FROM student WHERE `id` = '$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}



//  =============================== QSN 1 ==============

$sql = "SELECT * FROM `student` WHERE 1";
$QSN1 = $conn->query($sql);
$QSN1 = mysqli_fetch_all($QSN1, MYSQLI_NUM);   // for [0]





$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="Q4.php" method="post">

        id <input type="text" name="id" id="">
        <button>DELETE student</button>

    </form>



    <h1>QSN 1</h1>

    <table border="1">
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>CGPA</td>
            <td>Course Name</td>
        </tr>

        <?php foreach ($QSN1 as $row) { ?>

            <tr>

                <td><?php echo $row[0]; ?></td>
                <td><?php echo $row[1]; ?></td>
                <td><?php echo $row[2]; ?></td>
                <td><?php echo $row[3]; ?></td>

            </tr>
        <?php
        }
        ?>
    </table>

    <br>
    <a href="Q1-Q3.php">GO PAGE 1</a>
    <br>
    <a href="Q5.php">ASSIGN COURSE</a>

</body>

</html>