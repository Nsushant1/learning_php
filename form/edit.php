<?php
$conn = mysqli_connect('localhost', 'root', '', 'bca');

if (!$conn) {
    die("Database not connected");
}

// Validate ID
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    die("Invalid student ID.");
}

$id = intval($_GET['id']);
$sql = "SELECT * FROM students WHERE id=$id";
$result = mysqli_query($conn, $sql);

if (!$result || mysqli_num_rows($result) == 0) {
    die("Student not found.");
}

$student = mysqli_fetch_assoc($result);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);

    // Debugging output
    print_r($_POST);  // Check if form data is coming through

    $sql = "UPDATE students SET name='$name', email='$email', address='$address' WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "Record Updated Successfully";  // Add this before redirection
        header("Location: student.php");
        exit;
    } else {
        echo "Update Failed: " . mysqli_error($conn);  
    }
}
?>

<form action="" method="post">
    <label for="name">Name</label> <br>
    <input type="text" value="<?= htmlspecialchars($student['name']) ?>" name="name" required> <br>
    <label for="email">Email</label> <br>
    <input type="email" value="<?= htmlspecialchars($student['email']) ?>" name="email" required> <br>
    <label for="address">Address</label> <br>
    <input type="text" value="<?= htmlspecialchars($student['address']) ?>" name="address" required> <br> <br>
    <button type="submit">Update Record</button>
</form>
