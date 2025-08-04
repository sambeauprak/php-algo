<?php

$ok = false;
while ($ok == false) {
    $password = readline("Saisir votre mot de passe : ");
    if ($password === "1234") {
        $ok = true;
    }
}

echo "Youhou ! Connexion réussie !";