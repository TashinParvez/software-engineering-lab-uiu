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


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $published_year = $_POST['published_year'];
    $genre = $_POST['genre'];
    $quantity = $_POST['quantity'];



    // // ========================= Insert DATA =========================

    $sql = "INSERT INTO `books` (`book_id`, `title`, `author`, `published_year`, `genre`, `quantity`) 
    VALUES (NULL, '$title', '$author', '$published_year', '$genre', '$quantity');";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }


    echo "To view updated table Click here: " . "<a href='show-books-table.php'>Link</a>";
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

    <form action="book-insert.php" method="post">
        Title<input type="text" name="title" id=""> <br>
        author<input type="text" name="author" id=""> <br>
        published_year<input type="text" name="published_year" id=""> <br>
        genre<input type="text" name="genre" id=""> <br>
        quantity <input type="text" name="quantity" id=""> <br>
        <button>Submit</button>
    </form>

</body>

</html>