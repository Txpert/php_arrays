<?php

//Assoziative Arrays:
/* -Die Array-Elemente werden mit Schlüsseln versehen, die Strings sein können. 
Das bedeutet, dass jedes Element des Arrays durch ein 
Schlüssel-Wert-Paar repräsentiert wird.
-Die Reihenfolge der Elemente ist nicht zwingend fest, und der Zugriff erfolgt über 
den jeweiligen Schlüssel.
-Dies ist besonders nützlich, wenn die Elemente eine bestimmte Bedeutung oder 
Bezeichnung haben. */


$tasks = [
    "laundry" => "John",
    "trash" => "Frida",
    "vacuum" => "Basse",
    "dishes" => "Bella"
];

echo $tasks['laundry'];

print_r($tasks);
echo count($tasks);
