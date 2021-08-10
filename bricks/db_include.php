<?php
include 'db_details.php';

$database_name = "bricklovers_db";

$conn = new mysqli($server_name, $username, $password, $database_name);  // create connection

// check connection
if ($conn->connect_error) {
    die("Connection failed! Check with the administrator!");
    // write to a log 
}

?>