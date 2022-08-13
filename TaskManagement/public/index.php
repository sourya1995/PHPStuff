<?php

$urlMap = [
    '/login' => 'login.php',
    '/logout' => 'logout.php',
    '/tasks' => 'tasks.php'
];

$pathInfo = $_SERVER['PATH_INFO'] ?? '/login';
if(isset($urlMap[$pathInfo])) {
    include(__DIR__.'/../pages/'.$urlMap[$pathInfo]);
} else{
    header($_SERVER['SERVER_PROTOCOL'].'404 Not Found');
    include(__DIR__.'/../pages/404.php');
}