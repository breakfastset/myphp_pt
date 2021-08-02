<?php

// associate arrays
$animals = array(
    "amur leopard"=>"Found in Russia or China with only 70 left in the world",
    "sumatran rhino"=>"Most threatened rhino species in the world, fewer than 100 left",
    "hainan gibbon"=>"With only about 25 left in the world, this species is found in Hainan Island.",
    "vaquita"=>"Rarest Marine mammal in Mexico's Gulf of California"
);

print_r($animals);

$animals2 = array(
    "pangolin"=>"Critically endangered due to the belief that they are delicacies in some countries",
    "seneca white deer"=>"Extremely rare herd of deer found in former Seneca Army Depot"
);

$all_animals = $animals + $animals2;  // equivalent to merge

echo "<br/><br/><br/>";
print_r($all_animals);

$array1 = array(1, 3, 6, 7, 8);
$array2 = array(3, 5, 6, 8, 10, 11);

$result_array = array_intersect($array1, $array2);
echo "<br/><br/><br/>";
print_r($result_array);  // 3, 6, 8

$result_array = array_diff($array1, $array2);
echo "<br/><br/><br/>";
print_r($result_array);  // 1, 7


?>