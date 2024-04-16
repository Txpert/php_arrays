<?php

$numbers = [2, 3, 4];
array_unshift($numbers, 0, 1);
print_r($numbers);
// Ausgabe: Array ( [0] => 0 [1] => 1 [2] => 2 [3] => 3 [4] => 4 )
