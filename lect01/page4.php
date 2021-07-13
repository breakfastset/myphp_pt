<?php

$people = array("Starscream", "Hamm", "Rex", "Tortoise");

print_r($people); // quick and dirty way to debug your array

$people[] = "Hermione";
$people[] = "Ron";
$people[] = "Harry";

echo "<br/><br/>";

print_r($people);   // printing again after adding 3 people

?>