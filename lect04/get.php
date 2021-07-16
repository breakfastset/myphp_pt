<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="get_action.php" method="POST">
    <table>
        <tr>
            <td>Name: </td><td><input type="text" name="full_name" id="full_name"></td>
        </tr>
        <tr>
            <td>Age: </td><td><input type="text" name="age" id="age" size="3"></td>
        </tr>        
        <tr><td colspan="2"><input type="submit" value="Send"></td></tr>
    </table>

    </form>
</body>
</html>