<?php
function greet($salutation, $name)
{
    echo "Hello and Good Evening ". $salutation . " " . $name ."!<br/>";
}

function calculate_BMI($weight, $height)
{
    $bmi = $weight / $height / $height;
    return number_format($bmi, 2, ".", "");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Function Demo</title>
</head>
<body>
<?php
greet("Mr", "Hulk");
greet("Ms", "Wanda");
greet("Mr", "Vision");
greet("Dr", "Strange");
greet("Ms", "Black Widow");
greet("Mr", "Stark");
echo "<br/>";

$height = 1.78;
$weight = 72;
$your_bmi = calculate_BMI($weight, $height);
echo "Your BMI is ". $your_bmi . "<br/>";

?>
</body>
</html>