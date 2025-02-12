<?php

if (!empty($_FILES)) {
    $image = $_FILES['image']['name'];                     //name of the file

    $tmp_name = $_FILES['image']['tmp_name'];             //temporary location
    move_uploaded_file($tmp_name, "images/" . $image);    //move the file to the uploads folder
}
?>
<h1>Contact</h1>
<form action="" method="post" enctype="multipart/form-data">
    image: <br>
    <input type="file" name="image"><br><br>
    <button type="submit">Submit</button>
</form>