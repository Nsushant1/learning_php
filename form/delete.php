<?php
$conn = mysqli_connect('localhost', 'root', '', 'bca');

if (!$conn) {
    die("Database not connected"); // Changed to proper error message
}

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    die("Invalid student ID."); // Prevents SQL injection
}

$id = intval($_GET['id']); // Ensures ID is an integer
$sql = "DELETE FROM students WHERE id=$id";
$result = mysqli_query($conn, $sql);

if ($result) {
    header("Location: student.php");
    exit; // Ensures script stops after redirection
} else {
    echo "Data not deleted: " . mysqli_error($conn); 
}
?>
