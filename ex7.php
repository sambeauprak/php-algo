<?php

// L'utilisateur a 3 essais max, et ensuite on lui dit Erreur
// Le mot de passe ait 1 minuscule, 1 majuscule et 1 caractère spéciale et 1 chiffre et au minimum 8 caractères


// Je veux un tableau multidimensionnel avec plusieurs email et mot de passe

$utilisateurs = [
    ["sambeauprak@gmail.com", "zsA7j#jK"],
    ["sambeauprak@gmail.com", "zsA7j#jK"],
    ["sambeauprak@gmail.com", "zsA7j#jK"],
    ["sambeauprak@gmail.com", "zsA7j#jK"],
    ["sambeauprak@gmail.com", "zsA7j#jK"],
];

// Créer une function login($email, $password), la fonction retourne Ok, ou pas Ok

$password = "";

while ($password != "OpenAI2025") {
    $password = readline("Saisir votre mot de passe : ");
}

echo "Youhou ! Connexion réussie !";
