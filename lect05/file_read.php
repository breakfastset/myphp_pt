<!DOCTYPE html>
<html lang="en">
<head>
    <title>Reading a csv file into an array</title>
</head>
<body>
<h1>Reading the file contents into array</h1>    

<?php
$filename = "january_averages.csv";
$january_readings = file($filename);

print_r($january_readings);  // an array of strings delimited by commas
echo "<br/><br/>";

for($i = 0; $i < count($january_readings); $i++) 
{
    $current_reading = explode(", ", $january_readings[$i]);
    print_r($current_reading);
    echo "<br/>==============<br/>";
    echo "Reading 1: " . $current_reading[0] . "<br/>";
    echo "Reading 2: " . $current_reading[1] . "<br/>";
    echo "Reading 3: " . $current_reading[2] . "<br/>";
    $january_readings[$i] = $current_reading;  // assign array to array

}

echo "<br/><br/>";
print_r($january_readings);  // an array of arrays



?>

</body>
</html>