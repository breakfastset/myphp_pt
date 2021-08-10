<?php
include "utilities.php";
include "db_include.php";

$username = $password = "";  // initialize all variables to empty string
$full_name = $contact = "";
$address = "";

if (isset($_POST["username"])) $username = sanitize_input($_POST["username"]);
if (isset($_POST["password"])) $password = sanitize_input($_POST["password"]);
if (isset($_POST["full_name"])) $full_name = sanitize_input($_POST["full_name"]);
if (isset($_POST["contact"])) $contact = sanitize_input($_POST["contact"]);
if (isset($_POST["address1"])) $address = sanitize_input($_POST["address1"]);
if (isset($_POST["address2"])) $address = $address . " " . sanitize_input($_POST["address2"]);

$sql = "SELECT username FROM brickuser WHERE username='" . $username . "'";

$sql2 = "INSERT INTO brickuser (username, password, full_name, contact, address) VALUES ('" .
    $username . "', '" . $password . "', '" . $full_name . "', '" . $contact . "', '" . $address . "')";

$resultset = $conn->query($sql);

if ($resultset->num_rows > 0) {  // if username exists
    header("Location: register.php?message=error");  // direct back to register
} else {
    $conn->query($sql2);
    header("Location: index.php?message=registered");  // direct back to main page
}
?>
