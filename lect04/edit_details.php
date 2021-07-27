<?php
require_once "utilities.php";

$full_name = $age = "";  // initialize to empty strings first

// need to check whether the _POST array is available and whether the keys are available.
if (isset($_POST["edit_full_name"])) $full_name = sanitize_input($_POST["edit_full_name"]);
if (isset($_POST["edit_age"])) $age = sanitize_input($_POST["edit_age"]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Details form</title>
</head>
<body>
    <form action="get_action.php" method="POST">
    <table>
        <tr>
            <td>Name: </td><td><input type="text" name="full_name" id="full_name"
                value="<?php echo $full_name; ?>"></td>
        </tr>
        <tr>
            <td>Age: </td><td><input type="text" name="age" id="age" size="3"
            value="<?php echo $age; ?>"></td>
        </tr>        
        <tr><td colspan="2"><input type="submit" value="Send"></td></tr>
    </table>

    </form>
</body>
</html>