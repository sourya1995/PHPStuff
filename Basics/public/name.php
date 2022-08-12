<?php 
session_start();
if (isset($_POST['name'])) {
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['message'] = 'Thanks for telling us your name!';
    header('Location: /random.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Name</title>
</head>
<body>
    <form method="POST">
        <p>
            <label for="name">Your name:</label>
            <input type="text" name="name" id="name">
        </p>
        <p><button type="submit">Submit</button></p>
    </form>
</body>
</html>