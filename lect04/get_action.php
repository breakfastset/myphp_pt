<?php
require_once "utilities.php";

$full_name = $age = "";  // initialize to empty strings first

// need to check whether the _POST array is available and whether the keys are available.
if (isset($_POST["full_name"])) $full_name = sanitize_input($_POST["full_name"]);
if (isset($_POST["age"])) $age = sanitize_input($_POST["age"]);
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
    <h1>Results Page</h1>
<?php
echo "Your name is " . $full_name . "<br/>";
echo "Your age is " . $age . "<br/>";

?>
</body>
</html>