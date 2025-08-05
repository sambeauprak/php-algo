<?php

$tableau = [
    ["Mélodie", 1],
    ["Samy", 1],
    ["Marco", 1],
    ["Ilane", 1],
    ["Ilmira", 2],
    ["Polina", 2],
    ["Vladimir", 2],
    ["Vahe", 2]
];

$tableau[0][] = ["Syrine", 3];


//print_r($tableau);

// String interpolation

for ($i = 0; $i < count($tableau); $i++) {
    for ($j = 0; $j < count($tableau[$i]); $j++) {
        echo $tableau[$i][$j];
    }
}



$phrase2 = 'B'; // type: caractère


$prenom = "Sambeau";

$phrase = "Je m'appelle $prenom"; // Chaîne de caractères

$phrase = 'Je m' . "'" . 'appelle ' . $prenom;
$phrase = 'Je m\'appelle ' . $prenom;
