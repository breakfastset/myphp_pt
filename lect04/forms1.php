<?php
require_once "utilities.php";
$full_name = "";
$output = "";
if (isset($_POST["full_name"])) $full_name = sanitize_input($_POST["full_name"]);
if (!empty($full_name))
{
    $output = "Hi <b>" . $full_name . "</b>! Nice to meet you!<br/>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <?php
    echo $output;
    ?>

<form action="forms1.php" method="POST">
What is your name?
<input type="text" name="full_name"/>
<input type="submit" value="Submit"/>
</form>
    
</body>
</html>