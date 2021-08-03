<?php
session_start();

$username = "";

if (isset($_SESSION["username"])==false) {
    echo "You are not allowed here!";
} else {
    echo "Hi " . $_SESSION["username"] . ". Welcome! <br/>";
}

?>