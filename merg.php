<?php

$array1 = ["a" => "Apfel", "b" => "Banane"];
$array2 = ["c" => "Cherry"];
$result = array_merge($array1, $array2);
print_r($result);

// Ausgabe: Array ( [a] => Apfel [b] => Banane [c] => Cherry )
