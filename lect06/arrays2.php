<?php

$cars = array("Toyota Camry", "Toyota Harrier", "VW Beetle", "Mercedes S Class", "BMW X5", "VW Beetle", 
    "Toyota Camry", "Mercedes A Class", "BMW X3", "Porsche Macan", "Porsche 911", "Porsche 911",
    "Honda Vezel", "Subaru Forester", "Honda Vezel"
);

$unique_cars = array_unique($cars);

print_r($unique_cars);

echo "<br/><br/>";

$unique_cars = array_values($unique_cars);

print_r($unique_cars);

echo "<br/><br/>";


?>