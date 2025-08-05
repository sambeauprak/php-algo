<?php
$phrase = readline("Saisir une phrase : ");

$estBinaire = false;

for ($i = 0; $i < strlen($phrase); $i++) {
    $lettre = $phrase[$i];
    if ($lettre == 0 || $lettre == 1) {
        $estBinaire = true;
    }
}

if ($estBinaire == true) {
    echo "Ceci est du binaire !";
} else {
    echo "Ce n’est pas du code";
}
