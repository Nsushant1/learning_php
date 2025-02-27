<?php
$conn = mysqli_connect('localhost', 'root', '', 'bca');

if (!$conn) {
    echo "Database not connected"; // Fixed incorrect connection message
}

$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Query failed: " . mysqli_error($conn)); // Added error handling for query failure
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Records</title>
</head>

<body>
    <blockquote>
        <h1>Student Record</h1>
        <a href="student.php">Home</a>
        <a href="add.php">Add Student</a>
        <table border="1" width="100%">
            <thead>
                <tr>
                    <th>Sn</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($result as $key => $students) { ?>
                    <tr>
                        <td><?= $key + 1 ?></td>
                        <td><?= $students['name'] ?></td>
                        <td><?= $students['email'] ?></td>
                        <td><?= $students['address'] ?></td>
                        <td>
                            <a href="edit.php?id=<?= $students['id'] ?>">Edit</a> <!-- Fixed URL -->
                            <a href="delete.php?id=<?= $students['id'] ?>">Delete</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </blockquote>
</body>

</html>