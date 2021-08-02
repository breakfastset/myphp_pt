<?php
$timeslots = array();

if(isset($_POST["timeslots"]) && is_array($_POST["timeslots"])) $timeslots = $_POST["timeslots"];

for($i=0; $i<count($timeslots); $i++) 
{
    echo "Timeslot: " . $timeslots[$i] . "<br/>";
}

?>