<?php
session_start();
if(!isset($_SESSION['authenticated user'])) {
    header('Location: /login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><a href="/logout.php">Log Out</a></p>
    <p>Here's something special for those logged in:</p>
    <p><img src="/elephpant.jpg" alt="An elephpant"></p>
</body>

</html>