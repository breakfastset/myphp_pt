<?php
include "session_check.php";
include "db_include.php";

$username = $_SESSION["username"];  // grab the username from session
$full_name = $address = $contact = "";  // initialize all to empty strings

$sql = "SELECT full_name, contact, address FROM brickuser WHERE username='" . $username . "'";

$resultset = $conn->query($sql);

if ($resultset->num_rows > 0) {
    $row = $resultset->fetch_assoc();   // fetch the row
    $full_name = $row["full_name"];
    $contact = $row["contact"];
    $address = $row["address"];
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Personal Details</title>
</head>
<body>
    <h1>Update Your details Here</h1>
    <form action="update_details.php" method="post">
        
    <table>
        <tr>
            <td>Full name: </td><td><?php echo $full_name; ?></td>
        </tr>
        <tr>
            <td>Contact: </td>
            <td>
                <input type="text" name="contact" id="contact" size="20" maxlength="15" value="<?php echo $contact; ?>">
            </td>
        </tr>
        <tr>
            <td>Address: </td>
            <td>
            <textarea style="resize: none;" name="address" id="address" cols="30" rows="10"><?php echo $address; ?></textarea>    
            </td>
        </tr>

        <tr>
            <td colspan="2"><input type="submit" value="Update Particulars"> <input type="reset" value="Reset"></td>        
        </tr>
    </table>



    </form>


</body>
</html>