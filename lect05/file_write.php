<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
<h1>Writing a csv file</h1>
<?php

$january_reading = "61, 42, 48\n";
$january_reading .= "61, 41, 49\n";
$january_reading .= "63, 33, 51\n";
$january_reading .= "56, 50, 30\n";
$january_reading .= "73, 20, 59\n";
$january_reading .= "45, 43, 44\n";

$filename = "january_averages.csv";
file_put_contents($filename, $january_reading);

?>
    
</body>
</html>