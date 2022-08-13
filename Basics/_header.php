<?php $title = $title ?? 'PHP for the Web';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo htmlspecialchars($title, ENT_QUOTES); ?></title>
</head>
<body>
    <ul>
        <li><a href="/">Homepage</a></li>
        <li><a href="/name.php">Name</a></li>
        <li><a href="/random.php">Random Number</a></li>
        <li><a href="/pictures.php">Pictures</a></li>
        <li><a href="/secret.php">Secret Picture</a></li>
    </ul>
    <ul>
        <?php
        if(isset($_SESSION['authenticated_user'])) {
            ?>
            <li>You are logged in as:<?php echo $_SESSION['authenticated user']; ?></li>
            <li><a href="/logout.php">Log out</a></li>
            <?php
        }
        else {
            ?>
            <li><a href="/login.php">Log in</a></li>
            <?php
        }
        ?>
    </ul>
    <?php 
    include(__DIR__.'/_flash_message.php');