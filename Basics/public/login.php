<?php
session_start();
$users = ['sourya' => '$2y$10$q3Sz04SSNe6RolwWFCd4AObQ5ERO4an6H07/MDHxV3fKz839l4zeq'];
if(isset($_POST['username'], $_POST['password'])){
    if(isset($users[$_POST['username']])){
        $expectedPasswordHash = $users[$_POST['username']];
        if(password_verify($_POST['password'], $expectedPasswordHash)){
            $_SESSION['authenticated user'] = $_POST['username'];
            header('Location: /secret.php');
            exit;
        }
    }
}
?>
<?php 
$title = 'Login';
include(__DIR__.'/../_header.php');
?>
    
    <form method="POST">
        <div>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username">
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password">
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
<?php include(__DIR__.'/../_footer.php');
