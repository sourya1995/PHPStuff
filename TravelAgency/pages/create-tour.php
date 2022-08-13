<?php
include(__DIR__.'/../bootstrap.php');
$toursJsonFile = __DIR__.'/../data/tours.json';
if(file_exists($toursJsonFile)) {
    $jsonData = file_get_contents($toursJsonFile);
    $toursData = json_decode($jsonData, true);
} else {
    $toursData = [];
}



$toursData[] = [
    'destination' => 'Berlin',
    'number_of_tickets_available' => 10,
    'is_accessible' => true
];

$jsonData = json_encode($toursData, JSON_PRETTY_PRINT);


file_put_contents($toursJsonFile, $jsonData);