<?php

$nombre = readline("Saisir un nombre : ");

for ($i = 1; $i <=10; $i++) {
    $resultat = $nombre * $i;
    echo "$nombre *  $i =  $resultat\n";
}
