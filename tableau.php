<?php

$tableau = ["Pêche", "Abricot"];

$tableau[] = "Fraise";

echo end($tableau); // afficher le dernier élément du tableau

echo $tableau[count($tableau) - 1];

