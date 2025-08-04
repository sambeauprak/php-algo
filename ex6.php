<?php

$note = readline("Saisir une note entre 0 et 20");

if ($note < 0 && $note > 20) {
 echo "Votre note n’est pas bonne";
}

if ($note <= 9) {
    echo "Insuffisant";
} elseif ( $note >= 10 && $note <= 13) {
    echo "Peut mieux faire";
} elseif ($note >= 14 && $note <= 16) {
    echo "Bien";
 } else {
    echo "Excellent";
 }














// AGE = 20
// SI AGE < 21 ET AGE > 18 ALORS XAND
//     ECRIRE "Majeur FR mais pas INT"





// AGE = 20
// SI AGE EST EGALE À 21 OU AGE > 18 ALORS XOR
//     ECRIRE "Majeur FR mais pas INT"