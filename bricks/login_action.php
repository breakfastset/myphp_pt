<?php
session_start();   // start the session
include "utilities.php";
include "db_include.php";

$username = $password = "";  // initialize all variables to empty string

if (isset($_POST["username"])) $username = sanitize_input($_POST["username"]);
if (isset($_POST["password"])) $password = sanitize_input($_POST["password"]);

$sql = "SELECT username FROM brickuser WHERE username='" . $username . "' AND password ='" . $password . "'";

$resultset = $conn->query($sql);

if ($resultset->num_rows > 0) {  // if username exists
    $_SESSION["username"] = $username;
    header("Location: index_members.php");
} else {
    header("Location: index.php?message=errorlogin");  // direct back to main page
}
