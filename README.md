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
Les personnages auront comme caractéristiques, à minima, car l'application sera ammené a évoluer :
- un nom 
- une année de création 
- un nom de bd affilié

Ces artistes auront, eux aussi, à minima :
- un nom
- une année de naissance
- une nationalité

Ces derniers pourront bien entendu avoir créé plusieurs personnages, alors qu'on considèrera que chaque personnage n'a qu'un seul dessinateur.

Le principe de cette application est de pouvoir trouver des informations sur des personnages ET des dessinateurs de bande-dessinée et d'en apporter si le besoin y est, le tout dans un environnement agréable à utiliser.

