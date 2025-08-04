<?php

while (true) {
    $password = readline("Saisir votre mot de passe : ");
    if ($password === "1234") {
        break;
    }
}

echo "Youhou ! Connexion réussie !";