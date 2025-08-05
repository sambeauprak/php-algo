<?php

// Demander 5 mots à l’utilisateur, puis les afficher en ordre inverse.

$mots = [];

for ($i = 0; $i < 5; $i++) {
    $mots[] = readline("Saisir un mot : "); 
}

for($i = 4; $i >= 0; $i--) {
    echo "$mots[$i] \n";
}