<?php

$users = [
    "samy@gmail.com" => "6yTf_#eCameroun",
    "lolo@gmail.com" => "6yTf_#eRDC",
];


$email = readline("Saisir votre email : ");
$password = readline("Saisir votre mot de passe : ");

if ($users[$email] == $password) {
    echo "Connexion";
} else {
    echo "Dégage de là";
}
