<?php
$fruits = [
    "Apple", // 0
    "Banana", // 1
    "Cherry" // 2
];

array_splice($fruits,0 ,1);
//array_splice($array, $start, $length, $array_of_elements_to_insert);

echo $fruits[0];