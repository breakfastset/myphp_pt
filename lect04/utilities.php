<?php
function sanitize_input($string) 
{
    if (function_exists("get_magic_quotes_gpc") && get_magic_quotes_gpc())
    {
        $string = stripslashes($string);
    }
    $string = strip_tags($string);
    $string = htmlentities($string);
    return $string;
}
?>