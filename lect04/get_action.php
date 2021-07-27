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
    <title>Document</title>
</head>
<body>
    <h1>Preview Page</h1>
<?php
echo "Your name is " . $full_name . "<br/>";
echo "Your age is " . $age . "<br/>";
?>
<br/>
<form action="details_confirm.php" method="POST">
    <input type="hidden" name="full_name" id="full_name" value="<?php echo $full_name ?>">
    <input type="hidden" name="age" id="age" value="<?php echo $age ?>">
    <input type="submit" value="Confirm">
</form>
<br/>
<form action="edit_details.php" method="POST">
    <input type="hidden" name="edit_full_name" id="full_name" value="<?php echo $full_name ?>">
    <input type="hidden" name="edit_age" id="age" value="<?php echo $age ?>">
    <input type="submit" value="Edit Details">
</form>

<p>
    Click on Confirm if information is correct or edit otherwise.
</p>

</body>
</html>