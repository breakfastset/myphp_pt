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
echo "<h2>while loop</h2>";
$count = 1;
while ($count < 15) {
    echo $count . " times";
    echo "<br/>";
    $count++;
}
echo "<br/>";

echo "<h2>for loop</h2>";
for($i=1; $i < 15; $i++) {
    echo $i . " times";
    echo "<br/>";
}

?>
    
</body>
</html>