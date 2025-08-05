<?php

$nombreNotes = readline("Combien de notes voulez-vous saisir ? ");

$total = 0; // Initialise le total à 0 comme la touche AC de la calculatrice
for ($i = 1; $i <= $nombreNotes; $i++) {
    $note = readline("Saisir la note : ");
    $total = $total + $note; // $total += $note;s
}

// Une fois la saisie de note terminée on calcule la moyenne
$moyenne = round($total / $nombreNotes, 2); // Total de points / nombre de notes
// round permet d'arrondir, il faut spécifier, le nombre de chiffre après la virgule
echo "La moyenne est de : $moyenne";