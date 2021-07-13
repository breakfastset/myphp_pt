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
$my_string = "<b><i>The Wandering Earth</i></b>";
echo htmlspecialchars($my_string);
?>
<br/><br/>
<pre>
<?php

$string1 = "           Some String              ";
echo "Left Trim: [" . ltrim($string1) . "]<br/>";
echo "Right Trim: [" . rtrim($string1) . "]<br/>";
echo "Full Trim: [" . trim($string1) . "]<br/>";
?>
</pre>
</body>
</html>