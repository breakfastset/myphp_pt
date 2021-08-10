<?php
include "utilities.php";
$error_type = "";
$error = "";

if(isset($_GET["message"])) $error_type = sanitize_input($_GET["message"]);

if($error_type == "errorlogin") {
    $error = "<b>Login Error! Please try again</b>";
} elseif ($error_type == "notlogin") {
    $error = "<b>You need to Login first!</b>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home Page</title>
    <style>
        body {
            font-size: 20px;
            font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
    </style>

</head>

<body>

<form action="login_action.php" method="post" id="register_form">
<table>
    <tr>
        <td>Username: </td><td><input type="text" name="username" id="username" size="30" maxlength="30"></td>
    </tr>
    <tr>
        <td>Password: </td><td><input type="password" name="password" id="password" size="30" maxlength="20"></td>
    </tr>
    <tr>
        <td colspan="2"><input type="submit" value="Login Now"> <input type="reset" value="Clear"></td>        
    </tr>

</table>
</form>
<p><?php echo $error ?></p>

<p>
Create an account <a href="register.php">here</a>. It's FREE!
</p>

</body>
</html>