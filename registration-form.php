<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
</head>
<body>

<h2>Formulaire d'inscription</h2>

<form action="registration-form-handling.php" method="post">

    <label>Nom d'utilisateur :</label>
    <input type="text" name="username" required><br><br>

    <label>Mot de passe :</label>
    <input type="password" name="password" required><br><br>

    <label>Confirmer mot de passe :</label>
    <input type="password" name="confirm_password" required><br><br>

    <button type="submit">S’INSCRIRE</button>

</form>

<br>

<a href="login-form.php">SE CONNECTER</a>

</body>
</html>