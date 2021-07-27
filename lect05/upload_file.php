<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
<p>
<?php
$target_directory = "uploads/";
$target_file = $target_directory . basename($_FILES["picture_file"]["name"]);
$to_upload = true;

$image_file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));   // get jpg, gif,   we do not want these: exe, doc, php

if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["picture_file"]["tmp_name"]);
    if ($check == true) {  // an image
        echo "Image File - " . $check["mime"] . ".";
        $to_upload = true;   // allow uploading
    } else {  // not an image
        echo "File is not an image!";
        $to_upload = false;   // prevent uploading
    }
}
echo "<br/><br/>";
if ($to_upload == true) {
    if (move_uploaded_file($_FILES["picture_file"]["tmp_name"], $target_file)) {
        // success
        echo "File " . basename( $_FILES["picture_file"]["name"]) . " successfully uploaded!";
    } else {
        // failure
        echo "Error uploading file!";
    }
}
echo "<br/><br/>";


?>

</p>
    
</body>
</html>