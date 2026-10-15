<?php
$host = "localhost";
$dbname = "jeu_devinette";
$user = "root";
$pass = "";

try {
    $pdo = new PDO("mysql:host=$host", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // créer base si elle existe pas
    $pdo->exec("CREATE DATABASE IF NOT EXISTS jeu_devinette");

    // se connecter à la DB
    $pdo->exec("USE jeu_devinette");

    // créer table
    $pdo->exec("
        CREATE TABLE IF NOT EXISTS compte_utilisateur(
            id INT AUTO_INCREMENT PRIMARY KEY,
            nom_utilisateur VARCHAR(190) UNIQUE,
            mot_de_passe VARCHAR(190)
        )
    ");

} catch (PDOException $e) {
    die("Erreur DB : " . $e->getMessage());
}
?>