<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
<h1>List of files</h1>
<?php
$directory = "images/";   // relative path
$list_of_files = scandir($directory);

foreach($list_of_files as $current_file) 
{
    if ($current_file != '.' && $current_file != '..')
    {
        echo "<img src='" . $directory  . $current_file . "' width=300 /> <br/>\n";
        echo filesize($directory . $current_file) . " bytes <br/>";
        echo pathinfo($directory . $current_file, PATHINFO_EXTENSION) . " file <br/><br/>";
        // $directory . $current_file = images/baboon.jpg
    }
}

?>

</body>
</html>