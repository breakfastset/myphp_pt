<?php
$name = $age = $school = "";
if(isset($_POST["name"])) $name = $_POST["name"];
if(isset($_POST["age"])) $age = $_POST["age"];
if(isset($_POST["school"])) $school = $_POST["school"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Preview</title>
</head>
<body>
    <h1>Confirm your Details</h1>

    <form action="register_action.php" method="POST">
    <fieldset>
        <legend>Your personal details</legend>
    <table>
        <tr>
            <td>Name:</td>
            <td><?php echo $name ?><input type="hidden" name="name" id="name" value="<?php echo $name ?>"></td>
        </tr>
        <tr>
            <td>Age:</td>
            <td><?php echo $age ?><input type="hidden" name="age" id="age" size="4" value="<?php echo $age ?>"></td>
        </tr>
        <tr>
            <td>School:</td>
            <td><?php echo $school ?><input type="hidden" name="school" id="school" value="<?php echo $school ?>"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="Confirm and Register">
            <button onclick="history.back()">Go Back To Make Changes</button>
            </td>
        </tr>

    </table>


    </fieldset>

    </form>
    
</body>
</html>