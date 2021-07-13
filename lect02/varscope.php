<?php
function change_name()
{
    $movie_name = "Old";  // this is a local variable
}

function change_name_global()
{
    global $movie_name;
    $movie_name = "Cruella";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>

<?php
$movie_name = "Black Widow";  // this is global variable

change_name();  // call change_name in attempt to change to "Old"
echo "<h1>" . $movie_name . "</h1>";  // will still show black widow

change_name_global();
echo "<h1>" . $movie_name . "</h1>";  // will show Cruella

?>
    
</body>
</html>