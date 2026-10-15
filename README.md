# Jeu Devinette (PHP)

Salut! 👋

Ceci est mon projet de fin de session en PHP : un petit site web avec inscription, connexion et un jeu de devinette où on glisse des nombres dans des cases. J'ai réalisé le projet au Collège LaSalle.

C'est un projet d'école, donc ce n'est pas parfait, mais j'ai appris beaucoup en le construisant, surtout sur les sessions PHP et AJAX.

## C'est quoi, le jeu?

1. On s'inscrit, puis on se connecte.
2. Sur la page du jeu, on voit les nombres de **1 à 12**.
3. On **glisse-dépose** 5 nombres dans les 5 cases.
4. On clique sur **JOUER** : le serveur tire 5 nombres au hasard (tous différents) et compare avec nos choix.
5. Un message s'affiche selon le résultat :
   - 🎉 **Parfait!** : les 5 nombres sont bons
   - 👍 **Partiel** : au moins un nombre est bon
   - ❌ **Aucun** : aucun nombre n'est bon
6. Notre score (bonnes réponses sur le total) est mis à jour à chaque partie.

La page du jeu affiche aussi le nom de l'utilisateur connecté, son score, et la date et l'heure qui se mettent à jour chaque seconde.

## Ce que le site contient

| Fichier | Rôle |
|---|---|
| `registration-form.php` / `registration-form-handling.php` | Formulaire d'inscription et son traitement |
| `check-username.php` | Vérifie si le nom d'utilisateur est disponible, avec AJAX pendant la saisie |
| `login-form.php` / `login-form-handling.php` | Connexion |
| `logout.php` | Déconnexion |
| `game-form.php` | Page du jeu (glisser-déposer des nombres) |
| `game-form-handling.php` | Logique du jeu : tirage au hasard, calcul du score et du message |
| `db.php` | Connexion à la base de données |
| `Style.css` | Le style du site (responsive, avec une version pour petits écrans) |

## Ce que j'ai utilisé

- **PHP** : sessions (`$_SESSION`), traitement des formulaires, `match`
- **JavaScript** : glisser-déposer (drag and drop) et vérification AJAX
- **HTML / CSS** : mise en page responsive
- **Base de données** pour les utilisateurs
- **WAMP** pour faire tourner le site en local
- **Visual Studio** pour écrire le code

## Comment le lancer

1. Installer [WAMP](https://www.wampserver.com/) et le démarrer.
2. Cloner le dépôt dans le dossier `www` de WAMP :
   ```bash
   cd C:\wamp64\www
   git clone https://github.com/AymaneNa/NOM_DU_DEPOT.git ProjetFinal
   ```
3. Créer la base de données et vérifier les informations de connexion dans `db.php`.
4. Ouvrir le site dans le navigateur : `http://localhost/ProjetFinal/`

> Si le site ne s'affiche pas, c'est presque toujours la connexion à la base de données ou WAMP qui n'est pas démarré. C'est ce qui m'est arrivé le plus souvent.

## Ce que j'ai appris

- Comment les sessions gardent un utilisateur connecté d'une page à l'autre
- Comment faire une requête AJAX pour vérifier un nom d'utilisateur sans recharger la page
- Comment faire du glisser-déposer avec JavaScript et récupérer les valeurs dans un formulaire
- Qu'un petit oubli (comme une balise `<?php` manquante) peut faire perdre beaucoup de temps

## Ce que je pourrais améliorer

- Protéger l'affichage des données avec `htmlspecialchars` pour éviter les failles XSS
- Faire la vérification du nom d'utilisateur directement dans la base de données
- Permettre de retirer un nombre d'une case après l'avoir déposé
- Sauvegarder les meilleurs scores dans la base de données

## À propos de moi

Je m'appelle Aymane, j'étudie en programmation au Collège LaSalle et je termine mon DEC cette année. Je suis à la recherche de mes premières expériences en développement, alors n'hésitez pas à regarder mes autres projets ou à m'écrire!

GitHub : [AymaneNa](https://github.com/AymaneNa)
