<?php

$tableau = [25, 4, 2, 77, 12];

$valeurDeReference = $tableau[0]; // 25
for ($i = 0; $i < count($tableau); $i++) {
    if($valeurDeReference < $tableau[$i]) { 
        $valeurDeReference = $tableau[$i];
    } else {
        // Ne rien faire
    }
}

echo "Le nombre le plus grand de mon tableau est $valeurDeReference";
