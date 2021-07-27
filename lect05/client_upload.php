<!DOCTYPE html>
<html lang="en">

<head>
    <title>Upload a document</title>
</head>

<body>
    <p>
    <form action="upload_file.php" method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td>File: </td>
                <td><input type="file" name="picture_file" id="picture_file"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="submit" value="Upload File"></td>
            </tr>
        </table>

    </form>

    </p>

</body>

</html>