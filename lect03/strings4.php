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
$my_string = "Coding using PHP is Fun!; Is it Not?";
$word = strtok($my_string, ";");
while ($word != NULL) {
    echo "$word<br/>";
    $word = strtok(";");
}

$string_array = explode(" ", $my_string);  // storing into an array
print_r($string_array);
echo "<br/><br/><br/>";

$string1 = "Doraemon";
$string2 = "doraemoN";
if (strcmp($string1, $string2)==0) {
    echo "Both strings are exactly the same! <br/><br/>";
} else {
    echo "The strings are different!<br/><br/>";
}

if (strcasecmp($string1, $string2)==0) {
    echo "Both strings have exactly the same characters! <br/><br/>";
} else {
    echo "The strings do not have the same characters<br/><br/>";
}

?>
    
</body>
</html>