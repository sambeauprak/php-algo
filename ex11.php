<?php

$nombreNotes = readline("Combien de notes voulez-vous saisir ? ");

$total = 0;
for ($i = 1; $i <= $nombreNotes; $i++) {
    $note = readline("Saisir la note : ");
    $total = $total + $note;
}
$moyenne = round($total / $nombreNotes, 2);
echo "La moyenne est de : $moyenne";