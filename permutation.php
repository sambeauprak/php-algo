<?php

// $a = 254; // a = 47
// $b = 47; // b = 254

// $c = $a;
// $a = $b;
// $b = $c;





$tableau = [254, 47, 54, 5, 2];

$c = $tableau[0];
$tableau[0] = $tableau[1];
$tableau[1] = $c;

print_r($tableau);
