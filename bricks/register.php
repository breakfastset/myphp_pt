<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register Form</title>
    <style>
        body {
            font-size: 20px;
            font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
    </style>

</head>
<body>
    <h1>Registration form to Brick Lovers Hideout</h1>
    <form action="register_action.php" method="POST">

        <table>
        <tr>
            <td>Username: </td><td><input type="text" name="username" id="username" size="30" maxlength="30"></td>
        </tr>
        <tr>
            <td>Password: </td><td><input type="password" name="password" id="password" size="30" maxlength="20"></td>
        </tr>
        <tr>
            <td>Full name: </td><td><input type="text" name="full_name" id="full_name" size="40" maxlength="50"></td>
        </tr>
        <tr>
            <td>Contact: </td><td><input type="text" name="contact" id="contact" size="20" maxlength="15"></td>
        </tr>
        <tr>
            <td>Address: </td><td><input type="text" name="address1" id="address1" size="80" maxlength="90"></td>
        </tr>
        <tr>
            <td>&nbsp; </td><td><input type="text" name="address2" id="address2" size="80" maxlength="90"></td>
        </tr>

        <tr>
            <td colspan="2"><input type="submit" value="Register Now"> <input type="reset" value="Clear"></td>        
        </tr>
        </table>



    </form>
    
</body>
</html>