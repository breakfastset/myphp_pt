<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$people = array("Clint Barton", "Natasha", "Tony");

foreach($people as $person) {
    echo $person . " is a nice person.<br/>";
}

?>
</body>
</html>