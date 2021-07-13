<?php
function can_vote($age) {
    $message = "";
    if ($age < 0 || $age > 150) {
        $message = "INVALID age";
    } elseif ($age >= 21) {
        $message = "Eligible to Vote!";
    } else {  // 0 to < 21
        $message = "Sorry underaged!";
    }
    return $message;
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
echo "You are 22. ";
echo can_vote(22) . "<br/>";

echo "You are 18. ";
echo can_vote(18) . "<br/>";

echo "You are 151. ";
echo can_vote(151) . "<br/>";

echo "You are -1. ";
echo can_vote(-1) . "<br/>";

?>
    
</body>
</html>