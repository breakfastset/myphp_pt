<?php
include "utilities.php";
include "db_include.php";

$full_name = "";
$age = "";
$contact = "";
$address = "";
$remarks = "";

if (isset($_POST["full_name"])) $full_name = sanitize_input($_POST["full_name"]);
if (isset($_POST["age"])) $age = sanitize_input($_POST["age"]);
if (isset($_POST["contact"])) $contact = sanitize_input($_POST["contact"]);
if (isset($_POST["address1"])) $address = sanitize_input($_POST["address1"]);
if (isset($_POST["address2"])) $address = $address . " " . sanitize_input($_POST["address2"]);
if (isset($_POST["remarks"])) $remarks = sanitize_input($_POST["remarks"]);


$sql = "INSERT INTO customer (full_name, contact, age, address, remarks) VALUES ";
$sql = $sql . " ('" . $full_name . "',  '" . $contact . "', " . $age . ", '" . $address . "', '" . $remarks . "')";


$resultset = $conn->query($sql);

// redirect to end page
header("Location: register_end.php");

?>