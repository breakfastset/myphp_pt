<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-size: 12px;
            font-family: "verdana";
        }
    </style>
</head>
<body>
<?php
$ultramen = array("ace", "leo", "taro", "tiga", "dyna", "cosmo");

echo "Original array: ";
print_r($ultramen);
echo "<br/>";
echo "<br/>";

array_shift($ultramen);

echo "After shifting: ";
print_r($ultramen);
echo "<br/>";
echo "<br/>";

array_unshift($ultramen, "seven");

echo "After unshifting: ";
print_r($ultramen);
echo "<br/>";
echo "<br/>";

$new_ultramen = array("z", "gaia");
array_splice($ultramen, 2, 0, $new_ultramen);
echo "After splicing: ";
print_r($ultramen);
echo "<br/>";
echo "<br/>";

array_pop($ultramen);
echo "After popping: ";
print_r($ultramen);
echo "<br/>";
echo "<br/>";

array_push($ultramen, "ace");
echo "After pushing: ";
print_r($ultramen);
echo "<br/>";
echo "<br/>";

array_splice($ultramen, 2, 3);  // splice without 4th argument is delete
echo "After splicing (Delete): ";
print_r($ultramen);
echo "<br/>";
echo "<br/>";

unset($ultramen[0], $ultramen[2]);
echo "After unset (Delete): ";
print_r($ultramen);
echo "<br/>";
echo "<br/>";


?>

</body>
</html>