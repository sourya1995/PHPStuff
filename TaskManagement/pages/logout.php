<?php

include(__DIR__ . '/../bootstrap.php');

$_SESSION = [];

// Redirect to /login
header('Location: /login');
exit;