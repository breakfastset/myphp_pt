<?php
function test1($some_var) {  // pass by value
    $some_var = 10;
}

function test2(&$some_var) {  // pass by reference
    $some_var = 20;
}

$my_var = 5;
test1($my_var);  // pass by value (COPY)
echo '1: $my_var: '. $my_var . "<br/>"; // value does not change

test2($my_var);  // pass by reference (ACTUAL var)
echo '2: $my_var: '. $my_var . "<br/>"; // value changes to 20


?>