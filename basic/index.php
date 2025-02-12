<?php
$name='sushant';
$address='ktm';
$phone='9823';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .admin-box{
            width: 300px;
            height: 300px;
            background-color:red;
        }
        .user-box{
            width: 300px;
            height:300px;
            background-color:green;
        }
    </style>
</head>
<body>
    <h1>My name is :<?php echo $name; ?></h1>
    <div class="admin-box">

    </div>
    <div class="user-box"></div>

</body>
</html>