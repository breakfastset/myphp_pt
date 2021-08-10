<?php
include "session_check.php";
include "utilities.php";
include "db_include.php";

$username = $_SESSION["username"];
$contact = "";
$address = "";

if (isset($_POST["contact"])) $contact = sanitize_input($_POST["contact"]);
if (isset($_POST["address"])) $address = sanitize_input($_POST["address"]);

$sql = "UPDATE brickuser SET contact='" . $contact . "', address ='" . $address . "' WHERE username='" . $username . "'";

echo $sql;
$resultset = $conn->query($sql);  // execute the query

header("Location: index_members.php?message=detailsupdated");  // direct back to main page

?>
