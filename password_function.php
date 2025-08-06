<?php

// L'utilisateur a 3 essais max, et ensuite on lui dit Erreur
// Le mot de passe ait 1 minuscule, 1 majuscule et 1 caractère spéciale et 1 chiffre et au minimum 8 caractères


// Je veux un tableau multidimensionnel avec plusieurs email et mot de passe



// Créer une function login($email, $password), la fonction retourne Ok, ou pas Ok

$password = "";

$nbEssais = 0;
$connexionReussie = false;


function login($email, $password)
{
    $utilisateurs = [
        ["sambeauprak@gmail.com", "zsA7j#jK"],
        ["sambeau@gmail.com", "jsA7j#jK"],
        ["sambeau.prak@gmail.com", "vsA7j#jK"],
        ["sambeaup@gmail.com", "fsA7j#jK"],
        ["jeanprak@gmail.com", "hsA7j#jK"],
    ];

    for ($j = 0; $j < count($utilisateurs); $j++) {
        $utilisateurEmail = $utilisateurs[$j][0];
        $utilisateurMdp = $utilisateurs[$j][1];

        if ($email  == $utilisateurEmail && $password == $utilisateurMdp) {
            return true;
        }
    }

    return false;
}


while ($connexionReussie == false) {
    $email = readline("Saisir votre email : ");
    $password = readline("Saisir votre mot de passe : ");

    if (strlen($password) < 8) {
        echo "La longueur du mot de passe est inférieur à 8";
        continue; // il revient à la ligne 27
    }

    $isUppercase = false;
    $isLowercase = false;
    $isNumeric = false;
    $isPunct = false;



    for ($i = 0; $i < strlen($password); $i++) {
        $lettre = $password[$i];

        // Vérifie si la lettre est en majuscule
        if (ctype_upper($lettre)) {
            $isUppercase = true;
        }

        // Vérifie si la lettre est en minuscule
        if (ctype_lower($lettre)) {
            $isLowercase = true;
        }

        // Vérifie si la lettre est un nombre
        if (is_numeric($lettre)) {
            $isNumeric = true;
        }

        // Vérifie si la lettre est un caractère spécial
        if (ctype_punct($lettre)) {
            $isPunct = true;
        }
    }

    if ($isUppercase == false) {
        echo "Vous n'avez pas mis de majuscule \n";
        continue;
    }

    if ($isLowercase == false) {
        echo "Vous n'avez pas mis de miniscule \n";
        continue;
    }

    if ($isNumeric == false) {
        echo "Vous n'avez pas mis de nombre \n";
        continue;
    }

    if ($isPunct == false) {
        echo "Vous n'avez pas mis de caractère spécial \n";
        continue;
    }


    $nbEssais++;

    $connexionReussie = login($email, $password);


    if ($nbEssais >= 3) {
        echo "Mot de passe incorrect";
        $connexionReussie = false;
        break;
    }
}


// $regex = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[^a-zA-Z\d])[\S]{8,}$/';

// while ($password != "LaPlatef0rm.") {
//     $password = readline("Saisir votre mot de passe : ");

//     if (preg_match($regex, $password)) {
//         echo "Mot de passe valide \n";
//     } else {
//         echo "Mot de passe invalide \n";
//     }
// }

if ($connexionReussie == true) {
    echo "Vous êtes connecté.e";
}
