<?php
include 'db_include.php';

// 1. prepare the sql statements
$sql = "SELECT staffid, username, full_name, age FROM staff";

// 2. connect to the db and get the records
$resultset = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select all staff</title>
    <style>
        td {
            font-family: arial;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <h1>All Staff Information Table</h1>

    <table border="1" cellspacing="0" cellpadding="3">
        <tr>
        <th>Staff ID</th><th>Username</th><th>Full Name</th><th>Age</th>
        </tr>

        <?php
            if ($resultset->num_rows > 0) {
                while ($row = $resultset->fetch_assoc()) {  // fetch row using associative array
                    echo '<tr>';
                    echo '<td>' . $row["staffid"] . "</td>";
                    echo '<td>' . $row["username"] . "</td>";
                    echo '<td>' . $row["full_name"] . "</td>";
                    echo '<td>' . $row["age"] . "</td>";
                    echo '</tr>';
                }
            } else {
                echo "<tr><td colspan='4'>NO Records Found!</td></tr>";
            }
        ?>

    </table>

    
</body>
</html>