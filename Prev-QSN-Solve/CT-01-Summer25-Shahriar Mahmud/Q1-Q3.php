<?php

//  =============================== Database Connection ===============================

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

//  =============================== QSN 1 ===============================

$sql = "SELECT * FROM `student` WHERE 1";
$QSN1 = $conn->query($sql);
$QSN1 = mysqli_fetch_all($QSN1, MYSQLI_NUM);


// echo  "Q1 Solve <br>";
// echo  "===========<br>";
// foreach($QSN1 as $row)
// {
//     echo $row[0] . " " . $row[1]." " . $row[2]." " . $row[3] ; 
//     echo  "<br>";
// }

//  =============================== QSN 2 ===============================


$sql = "SELECT * FROM `course` WHERE 1";
$qsn2 = $conn->query($sql);
$qsn2 = mysqli_fetch_all($qsn2, MYSQLI_NUM);

// echo  "Q2 Solve <br>";
// echo  "===========<br>";
// foreach($qsn2 as $row)
// {
//     echo $row[0] . " " . $row[1]." " . $row[2]; 
//     echo  "<br>";
// }


//  ============================== QSN 3 ================================


$sql = "SELECT * FROM `teacher` WHERE 1";
$result = $conn->query($sql);
$result = mysqli_fetch_all($result, MYSQLI_NUM);

// echo  "Q3 Solve <br>";
// echo  "===========<br>";
// echo "<table border='1'> <tr><td>ID</td><td>Name</td><td>Course Name</td></tr>";
// foreach($result as $row)
// {
//     echo $row[0] . " " . $row[1]." " . $row[2]; 
//     echo  "<br>";
// }
// echo "</table>";



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



    <!-- =================== QSN 1 ============================== -->

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


    <!-- =================== QSN 2 ============================== -->

    <h1>QSN 2</h1>

    <table border="1">
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Faculty Name</td>
        </tr>

        <?php foreach ($qsn2 as $row) { ?>

            <tr>
                <td><?php echo $row[0]; ?></td>
                <td><?php echo $row[1]; ?></td>
                <td><?php echo $row[2]; ?></td>
            </tr>
        <?php
        }
        ?>
    </table>



    <!-- =================== QSN 3 ============================== -->

    <h1>QSN 3</h1>

    <table border="1">
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Course Name</td>
        </tr>

        <?php foreach ($result as $row) { ?>

            <tr>
                <td><?php echo $row[0]; ?></td>
                <td><?php echo $row[1]; ?></td>
                <td><?php echo $row[2]; ?></td>
            </tr>
        <?php
        }
        ?>
    </table>

    <!-- ============== END ================== -->

    <br>
    <a href="Q4.php">REMOVE STUDENT</a>
    <br>
    <a href="Q5.php">ASSIGN COURSE</a>

</body>

</html>