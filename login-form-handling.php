<?php
session_start();

// Vérifie si formulaire envoyé
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"];
    $password = $_POST["password"];

    // Utilisateur test
    $savedUsername = "amine";
    $savedPassword = "1234";

    // Vérification connexion
    if ($username == $savedUsername && $password == $savedPassword) {

        $_SESSION['username'] = $username;
        $_SESSION['score'] = "0/0";

        header("Location: game-form.php");

    } else {

        echo "Nom d'utilisateur ou mot de passe incorrect.";
    }
}
?>