<?php
$conn = mysqli_connect('localhost', 'root', '', 'bca');

if (!$conn) {
    echo "Database not connected"; // Fixed incorrect message
}

if ($_SERVER["REQUEST_METHOD"] == "POST") { // More secure than empty($_POST)
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);

    $sql = "INSERT INTO students (name, email, address) VALUES ('$name', '$email', '$address')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "Recorded";
    } else {
        echo "Not Recorded: " . mysqli_error($conn); // Added error message
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
</head>

<body>
    <blockquote>
        <a href="student.php">Home</a> &ensp;
        <a href="add.php">Add Student</a>
        <hr>
        <form action="" method="post">
            <label for="name">Name</label> <br>
            <input type="text" name="name" required> <br> <!-- Added required -->
            <label for="email">Email</label> <br>
            <input type="email" name="email" required> <br> <!-- Fixed input type -->
            <label for="address">Address</label> <br>
            <input type="text" name="address" required> <br> <br>
            <button type="submit">Add Record</button> <!-- Added type="submit" -->
        </form>
    </blockquote>
</body>

</html>