<!DOCTYPE html>
<html>
<head>
    <title>Inscription</title>
</head>
<body>

<h2>Créer un compte</h2>

<form action="traitement_inscription.php" method="POST">
    Nom d'utilisateur :
    <input type="text" name="username" required><br><br>

    Mot de passe :
    <input type="password" name="password" required><br><br>

    Confirmer mot de passe :
    <input type="password" name="confirm" required><br><br>

    <button type="submit">S'INSCRIRE</button>
</form>

<br>
<a href="connexion.php">SE CONNECTER</a>

</body>
</html>