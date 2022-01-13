# Laravel

## Pour récuperer ce projet

### Utiliser cette commande en se plaçant dans un dossier
```bash
https://github.com/Yashoo69/BD_Projet.git
```
### Dans ce dossier réinstaller les dépendances :
```bash
composer install
```

### Récréer le fichier .env

- en modifiant le .env.example en .env
- ou en faisant cette commande :
```bash
cp .env.example .env
```

### Créer une nouvelle base de données via phpMyAdmin par exemple

### Dans le fichier .env
Ajouter les informations suivantes:
- DB_DATABASE = nom de la base de données
- DB_USERNAME = nom d'utilisateur
- DB_PASSWORD = mot de passe

### Lancer les migrations et les seeders
```bash
php artisan migrate --seed
```

### Générer une clé :
```bash
php artisan key:generate
```

### Accéder au site avec :
```bash
php artisan serve
```


## L'application :

### Le thème de l'application est simple : les personnages de bandes dessinés.
Ces personnages devront avoir comme caractéristiques, à minima :
- un nom 
- une année de création 
- un nom de bd affilié
- un dessinateur

Les dessinateurs seront quand eux gérés dans une 2nd table. Pas besoin de mettre en place de table intermédiaire, une simple clé étrangère suffira.
Ces artistes auront, eux aussi, à minima :
- un nom
- une année de naissance
- une nationalité

Ces derniers pourront bien entendu avoir créé plusieurs personnages, alors qu'on considèrera que chaque personnage n'a qu'un seul dessinateur.

Le principe de l'application est de pouvoir réaliser le CRUD des personnages ET des dessinateurs, le tout dans un environnement agréable à utiliser.
Bien entendu, vous mettrez en place les migrations et seeder nécessaires au bon lancement de l'application, ainsi qu'un readme expliquant les étapes pour y arriver.


Les critères principaux de notation seront :
- fonctionnalité et propreté du code
- respect des nomenclatures
- pas de franglais
