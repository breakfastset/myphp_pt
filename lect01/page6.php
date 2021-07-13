<?php

$count = 10;
$count++;  // 11
$count += 5;   // $count = $count + 5;   -> 16

echo "count is " . $count . "<br/>";

$message = "";
($count > 10) ? $message= "you have many visitors.<br/>" : $message= "you have a few visitors.<br/>";

echo $message;
?>