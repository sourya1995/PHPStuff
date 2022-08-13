<?php
session_start();
if(!isset($_SESSION['authenticated user'])) {
    header('Location: /login.php');
    exit;
}
?>

<?php include(__DIR__.'/../_header.php'); ?>
    <p><a href="/logout.php">Log Out</a></p>
    <p>Here's something special for those logged in:</p>
    <p><img src="/elephpant.jpg" alt="An elephpant"></p>
<?php include(__DIR__.'/../_footer.php'); ?>