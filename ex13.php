<?php

// Fonction personnalisée – convertisseur Crée une fonction convertir_euros_vers_dollars(euros) avec un taux fixe de 1€ = 1.1$.

// function convertEuroToDollars() { //void function
//     $euro = readline("Saisir un montant en euro : ");
//     $dollars = $euro * 1.1;   
//     echo "$euro € = $$dollars";
// }

function sambeauConvertit($euro) {
     $dollars = $euro * 1.1;   
     echo "$euro € = $$dollars";
}

sambeauConvertit(10);
