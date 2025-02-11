<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $father_name = $_POST['father_name'];
    $mother_name = $_POST['mother_name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $address = $_POST['address'];
    $blood_group = $_POST['blood_group'];
    $department = $_POST['department'];
    $courses = isset($_POST['courses']) ? implode(", ", $_POST['courses']) : "None";

    echo "<h2>Form Submitted Successfully</h2>";
    echo "Name: $name";
    echo "<br>";
    echo "Father's Name: $father_name";
    echo "<br>";
    echo "Mother's Name: $mother_name";
    echo "<br>";
    echo "Phone: $phone";
    echo "<br>";
    echo "Email: $email";
    echo "<br>";
    echo "Gender: $gender";
    echo "<br>";
    echo "Date of Birth: $dob";
    echo "<br>";
    echo "Address: $address";
    echo "<br>";
    echo "Blood Group: $blood_group";
    echo "<br>";
    echo "Department: $department";
    echo "<br>";
    echo "Courses: $courses";

    echo "<pre>";
    print_r($_POST);
    echo " </pre>";
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Student Registration Form</title>
</head>

<body>
    <blockquote>
        <h1>Student Registration Form</h1>
        <form method="post" action="">
            <label>Name:</label><br>
            <input type="text" name="name"><br><br>

            <label>Father's Name:</label><br>
            <input type="text" name="father_name"><br><br>

            <label>Mother's Name:</label><br>
            <input type="text" name="mother_name"><br><br>

            <label>Phone Number:</label><br>
            <input type="text" name="phone"><br><br>

            <label>Email:</label><br>
            <input type="email" name="email"><br><br>

            <label>Gender:</label><br>
            <input type="radio" name="gender" value="Male"> Male
            <input type="radio" name="gender" value="Female"> Female
            <input type="radio" name="gender" value="Other"> Other<br><br>

            <label>Date of Birth:</label><br>
            <input type="date" name="dob"><br><br>

            <label>Address:</label><br>
            <input type="text" name="address"><br><br>

            <label>Blood Group:</label><br>
            <select name="blood_group">
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
            </select><br><br>

            <label>Department:</label><br>
            <input type="radio" name="department" value="CSE"> CSE
            <input type="radio" name="department" value="EEE"> EEE
            <input type="radio" name="department" value="BBA"> BBA<br><br>

            <label>Course:</label><br>
            <input type="checkbox" name="courses[]" value="C"> C
            <input type="checkbox" name="courses[]" value="C++"> C++
            <input type="checkbox" name="courses[]" value="Java"> Java
            <input type="checkbox" name="courses[]" value="AI"> AI
            <input type="checkbox" name="courses[]" value="Machine Learning"> Machine Learning
            <input type="checkbox" name="courses[]" value="Robotics"> Robotics<br><br>

            <label>Photo:</label><br>
            <input type="file" name="photo"><br><br>

            <input type="submit" value="Submit">
            <input type="reset" value="Reset">
        </form>
    </blockquote>
</body>

</html>