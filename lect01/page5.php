<?php

$dividend = 15;
$divisor = 6;

$result = $dividend / $divisor;

echo "Float result of " . $dividend . " divided by " . $divisor . " is " . $result . "<br/>";

$quotient = (int)($dividend / $divisor);  // truncate 2.5 to become integer by casting
$remainder = $dividend % $divisor;

echo $dividend . " divided by " . $divisor . " is " . $quotient . " with remainder " . $remainder . "<br/>";

?>