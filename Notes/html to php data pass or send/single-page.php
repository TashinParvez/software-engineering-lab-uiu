<?php

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name = $_POST['name'];
    $salary = $_POST['salary'];
    $salary = $salary * 1.5;

    echo "HI my name is $name<br>";
    echo "My salary is $salary<br>";

    if ($salary > 1000) {
        echo "VALO<br>";
    }

    func();
}

function func()
{
    echo "this is a func <br>";
    for ($i = 1; $i <= 10; $i++) {
        echo "5 * $i = " . (5 * $i) . "<br>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Form & Process</title>
</head>

<body>

    <form action="single-page.php" method="post" enctype="multipart/form-data">
        <input type="text" name="name" placeholder="Enter your name" required />
        <input type="number" name="salary" placeholder="Enter your salary" required />
        <button type="submit">Send</button>
    </form>

</body>

</html>