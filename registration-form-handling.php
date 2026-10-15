<?php

// Vérifie si formulaire envoyé
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Récupération données
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirm_password"];

    // Vérification mots de passe
    if ($password != $confirmPassword) {

        echo "Vous avez saisi 2 mots de passe différents.";

    } else {

        echo "Inscription réussie pour : " . $username;
    }
}
?>