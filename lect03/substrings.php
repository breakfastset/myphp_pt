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
$my_string = "Coding using PHP is Fun";
echo "<b>" . $my_string . "</b><br/>";
echo "substr(\$my_string, 7): ". substr($my_string, 7) . "<br/>";
echo "substr(\$my_string, 7, 5): ". substr($my_string, 7, 5) . "<br/>";
echo "substr(\$my_string, 7, 12): ". substr($my_string, 7, 12) . "<br/>";
echo "substr(\$my_string, 7, -4): ". substr($my_string, 7, -4) . "<br/>";
echo "substr(\$my_string, -6, -4): ". substr($my_string, -6, -4) . "<br/>";

echo "substr(\$my_string, -10): ". substr($my_string, -10) . "<br/>";
echo "<br/><br/><br/>";

echo "<b>Searching the string</b><br/>";
echo "strchr(): " . strchr($my_string, "using") . "<br/>";
echo "strrchr(): " .  strrchr($my_string, "u") . "<br/>";
echo "strpos(): " . strpos($my_string, "use") . "<br/>";

echo "<b>Finding the number of i in the string</b><br/>";
$count = 0;
$temp_string = $my_string;
$index = strpos($temp_string, "i");
while($index != FALSE) {
    $count++;
    $temp_string = substr($temp_string, $index+1);
    echo "temp_string: " . $temp_string . "<br/>";
    $index = strpos($temp_string, "i");
    echo "index: " . $index . "<br/>";
}
echo "Count of i: " . $count . "<br/>";
?>
    
</body>
</html>