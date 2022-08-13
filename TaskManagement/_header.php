<?php
$title = $title ?? 'PHP for the Web';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($title, ENT_QUOTES); ?></title>
    <link rel="stylesheet" href="/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/tasks">Tasks</a>
                </li>
                <?php
                if(isset($_SESSION['authenticated_user'])) {
                    ?>
                    <li class="navbar-text">You are logged in as: <?php echo $_SESSION['authenticated_user']; ?></li>
                    <li class="nav-item"><a class="nav-link" href="/logout">Log Out</a></li>
                    <?php
                }
                else{
                    ?>
                    <li class="nav-item"><a class="nav-link" href="/login">Log In</a></li>
                    <?php
                }
                ?>
            </ul>
        </nav>
   