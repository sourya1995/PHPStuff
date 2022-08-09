<!DOCTYPE html>
<html lang="en">
<head>
    <title>Doggos</title>
</head>
<body>
<?php

$numberOfDoggos = $_GET['number'];

for ($i = 1; $i <= $numberOfDoggos; $i++) {
    ?>
    Dog <?php echo $i; ?>:
    <img src="/dog.jpg" alt="Dog <?php echo $i; ?>">
    <?php
}

?>
</body>
</html>