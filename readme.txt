
## Installation

1. Téléchargez et installez XAMPP depuis [le site officiel](https://www.apachefriends.org/index.html).
2. Copiez les fichiers du projet dans le dossier `htdocs` de votre installation XAMPP.
3. Importez la base de données à l'aide de phpMyAdmin en utilisant le fichier `projet.sql`.

## Configuration de la base de données

- Nom de la base de données : `projet`
- Identifiant par défaut : `root`
- Mot de passe par défaut : (laissez vide)

Assurez-vous de modifier les informations de connexion à la base de données si nécessaire dans les fichiers de configuration du projet.

## Utilisation

1. Lancez les services Apache et MySQL depuis le panneau de contrôle XAMPP.
2. Accédez au projet dans votre navigateur en tapant `http://localhost/votre_projet`.
pour plus de details :
Téléchargement et installation de XAMPP :

Téléchargez XAMPP depuis le site officiel.
Installez-le sur votre système en suivant les instructions fournies.
Création d'une base de données :

Une fois XAMPP installé, accédez au dossier htdocs qui se trouve dans le répertoire XAMPP.
Placez vos fichiers dans ce dossier. Assurez-vous que les fichiers nécessaires pour votre projet sont présents ici.
Importation de la base de données :

Si vous avez déjà une base de données nommée "projet", vous pouvez l'importer dans phpMyAdmin, qui est inclus dans XAMPP.
Accédez à phpMyAdmin depuis votre navigateur en tapant http://localhost/phpmyadmin dans la barre d'adresse.
Connectez-vous à votre serveur MySQL.
Sélectionnez l'onglet "Importer" et choisissez votre fichier de base de données à importer.
Changer le nom de la base de données dans le code :

Si votre base de données est nommée différemment dans votre code, ouvrez votre code source.
Recherchez les références à la base de données et modifiez-les en conséquence pour correspondre au nouveau nom.
Exécution du projet :

Ouvrez le panneau de contrôle de XAMPP.
Démarrez les services Apache et MySQL.
Ouvrez votre navigateur web et accédez à votre projet en tapant http://localhost/nom_de_votre_projet

