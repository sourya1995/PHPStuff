<!DOCTYPE html>
<?php $randomInt = random_int(1, 10); ?>
<html lang="en">
<head>
    <title>Your lucky number</title>
</head>
<body>
<h1>Your lucky number is: <?php echo $randomInt; ?></h1>
<?php if ($randomInt > 5) { ?>
<h2>Nice!</h2>
<?php } ?>
<form method="POST" action="/pictures.php" >
    <input type="hidden" name="number" value="<?php
      echo $randomInt; ?>">
      <button type="submit">Now show me <?php echo $randomInt; ?> kittens!</button>
</form>
</body>
</html>