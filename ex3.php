<?php

echo "Saisir votre âge ";
$age = readline();
$futurAge = $age + 10;
echo "Dans 10 ans, vous aurez " . $futurAge;

$age = readline("Saisir votre âge ");
$futurAge = $age + 10;
echo "Dans 10 ans, vous aurez " . $futurAge;

// En PHP la concaténation fonctionne aussi sans l'opérateur . dans une chaîne de caractères
echo "Dans 10 ans, vous aurez $futurAge";