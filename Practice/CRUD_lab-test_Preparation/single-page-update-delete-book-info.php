<?php

include 'db-connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $id = $_POST['id'];
    $action = $_POST['action'];

    if ($action === 'update') {

        // $quantity = $_POST['quantity'];
        $quantity = $_POST['quantity'];

        // SQL Update query
        $sql = "UPDATE books SET quantity = '$quantity' WHERE `book_id` = '$id'";

        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }


        $conn->close();
    } elseif ($action === 'delete') {

        // SQL Delete query
        $sql = "DELETE FROM books WHERE id = '$id'";

        if ($conn->query($sql) === TRUE) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . $conn->error;
        }


        $conn->close();
    } else {
        echo "Invalid action.";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h4>Update or Delete Book Info</h4>

    <form action="single-page-update-delete-book-info.php" method="post">
        Book Id: <input type="text" name="id" required> <br>
        Quantity (only for update): <input type="text" name="quantity"> <br>

        Action:
        <select name="action" required>
            <option value="update">Update</option>
            <option value="delete">Delete</option>
        </select> <br>

        <button type="submit">Submit</button>
    </form>
</body>

</html>