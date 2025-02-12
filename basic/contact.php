<?php
$name = '';
$email = '';
$phone = '';
$message = '';

if (!empty($_POST))
    $name = $_POST['username'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <blockquote>
        <h1>Contact page</h1>
        <form action="" method="post">
            Name: <input type="text" name="username"><br><br>
            Email:<input type="text" name="email"><br><br>
            Phone: <input type="text" name="phone"><br><br>
            Message: <textarea name="message"> </textarea><br><br>
            <button>Add Record</button>
            <hr>
            <h1>Name:<?php echo $name; ?></h1>
            <h1>Email:<?php echo $email; ?></h1>
            <h1>Phone:<?php echo $phone; ?></h1>
            <h1>Message:<?php echo $message; ?></h1>

        </form>
    </blockquote>
</body>

</html>