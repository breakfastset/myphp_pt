<?php
session_start();

$username = "";
if (isset($_POST["username"])) $username = $_POST["username"];

if ($username == "admin") {
    $_SESSION["username"] = $username;  // 
    echo "Click <a href='main_page.php'> here </a>";
} else {
    echo "Wrong credentials!";
}

?>