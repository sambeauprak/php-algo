<?php

// Demander un mot et une clé. Chiffrer le mot en décalant chaque lettre selon la clé.

$mot = readline("Saisir un mot à déchiffrer : ");
$cle = readline("Saisir la clé : ");

$alphabet = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"];

$motTableau = str_split($mot);

for ($i=0; $i < count($motTableau); $i++) { 
    $lettre = $motTableau[$i];

    $position = array_search($lettre, $alphabet);
    if ($position - $cle < 0) {
        echo $alphabet[count($alphabet) + ($position - $cle) ];
    } else {
        echo $alphabet[($position - $cle)];
    }
}



