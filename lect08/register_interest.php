<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register your interest in our promotion!</title>
    <link rel="stylesheet" href="css/mystyle.css">
</head>
<body>
    <h1>Register your interest!</h1>

    <form method="POST" action="register_interest_action.php">
    <fieldset>
        <legend>Personal details</legend>
        <table>
            <tr>
                <td>Full Name:</td>
                <td><input type="text" name="full_name" id="full_name"></td>
            </tr>
            <tr>
                <td>Contact:</td>
                <td><input type="text" name="contact" id="contact" size="10" maxsize="20"></td>
            </tr>
            <tr>
                <td>Age:</td>
                <td><input type="text" name="age" id="age" size="4" maxsize="3"></td>
            </tr>
            <tr>
                <td>Address:</td>
                <td>
                    <input type="text" name="address1" id="address1"><br/>
                    <input type="text" name="address2" id="address2">
                </td>
            </tr>
        </table>
        <legend>Other preferences</legend>
        <textarea rows="10" cols="40" name="remarks"></textarea>
        <br/>
        <button type="submit">
            Register your interest NOW
        </button>
    </fieldset>

    </form>

</body>
</html>