<?php

$tableau = [
    "marco" => "A",
    "syrine" => "B",
    "troisième" => "C"
];

// POUR CHAQUE élément dans tableau alors
//     ECRIRE élement
// FIN POUR

echo "{$tableau['syrine']} \n";

foreach ($tableau as $element) {
    echo "$element \n";
}
