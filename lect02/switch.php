<?php
function calculate_subsidy($num_children) {
    $subsidy = 0;
    switch($num_children) {
        case 1:
            $subsidy = 1000;
            break;
        case 2:
            $subsidy = 1500;
            break;
        case 3:
        case 4:
            $subsidy = 2000;
            break;
        case 5:
        case 6:
        case 7:
        case 8:
        case 9:
        case 10:
            $subsidy = 4000;
            break;
        default:
            $subsidy = 100;
    }
    return $subsidy;
}

?>
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
$count = 1;

while($count <= 10) {
    echo "For " . $count . " children, you get $" . calculate_subsidy($count) . "<br/>";
    $count++;
}

echo "<br/><br/>";
for($i = 1; $i <= 10; $i++) {
    echo "For " . $i . " children, you get $" . calculate_subsidy($i) . "<br/>";
}

?>
    
</body>
</html>