<?php 

$numbers = array(1, 2, 3, 4);

if (in_array(4, $numbers))
 {
    echo "'4' ist im Array enthalten.";
} else {
    echo "'4' ist im Array nicht enthalten, da die Typüberprüfung aktiv ist.";
}
