<?php
define("GRAVITY", 9.81);  // gravity constant 

$first_name = "Charlie";
$last_name = "Brown";
$age = 9;

$age++;  // age is now 10?

echo "Value of G is: " . GRAVITY . "<br/>";

echo $first_name . " " . $last_name . " is a blockhead.<br/>";
echo "He is " . $age . " this year<br/>";

echo "<br/><br/>";

echo "$first_name $last_name is a delightable kid in Peanuts. <br/>"; // double quotes intepret the variables

echo "<br/><br/>";

echo '$first_name $last_name has a cute dog, Snoopy.<br/>'; // single quotes do not interpret the variables

?>