<?php

// ========================= database Connetion =========================

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "library_management";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// ========================= SHOW BOOKS =========================

$sql = "SELECT * FROM `books` WHERE 1";
$result = mysqli_query($conn, $sql);
// $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
$result = mysqli_fetch_all($result, MYSQLI_NUM);   // for [0]



// ========================= UPDATE =========================

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $id = $_POST['id'];
    $quantity = $_POST['quantity'];


    $sql = "UPDATE books SET `quantity`='$quantity' WHERE `book_id` = '$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}


$conn->close();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Insert</title>
</head>

<body>

    <table border="1">
        <tr>
            <td>Book ID</td>
            <td>Book Name</td>
            <td>Author</td>
            <td>Published Year</td>
            <td>Genre</td>
            <td>Quantity</td>
        </tr>

        <?PHP
        foreach ($result as $row) {   ?>
            <tr>
                <td> <?PHP echo $row[0]; ?></td>
                <td> <?PHP echo $row[1]; ?></td>
                <td> <?PHP echo $row[2]; ?></td>
                <td> <?PHP echo $row[3]; ?></td>
                <td> <?PHP echo $row[4]; ?></td>
                <td> <?PHP echo $row[5]; ?></td>
            </tr>
        <?PHP
        }
        ?>
    </table>


    <h4>Update Book Info...........</h4>

    <form action="update-books-info.php" method="post">
        Book Id<input type="text" name="id" id=""> <br>
        quantity <input type="text" name="quantity" id=""> <br>
        <button>Update</button>
    </form>




</body>

</html>