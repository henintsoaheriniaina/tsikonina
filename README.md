# Tsikonina

Tsikonina est une application web conçue pour permettre aux utilisateurs malgaches de publier et partager leurs recettes. L'objectif est de créer une plateforme conviviale où chacun peut découvrir, partager et apprendre des recettes traditionnelles et modernes.

## Fonctionnalités

-   **Publication de recettes** : Les utilisateurs peuvent publier leurs recettes en ajoutant des ingrédients, des étapes de préparation et des photos.
-   **Partage de recettes** : Les utilisateurs peuvent partager leurs recettes avec d'autres membres de la communauté.
-   **Recherche et filtre** : Les utilisateurs peuvent rechercher des recettes par ingrédient, nom ou type de plat.

## Technologies utilisées

-   **Backend** : Laravel (PHP)
-   **Frontend** : Blade (template engine de Laravel)
-   **Styles** : Tailwind CSS
-   **Gestion des packages** : pnpm
-   **Gestion des assets** : cloudinary

## Prérequis

Avant de commencer, assure-toi d'avoir les outils suivants installés sur ta machine :

-   PHP (version 8.0 ou plus)
-   Composer (pour gérer les dépendances PHP)
-   Node.js et pnpm (pour gérer les dépendances frontend)
-   MySQL ou MariaDB (ou toute autre base de données compatible avec Laravel)

## Installation

### Étapes pour lancer l'application :

1.  **Clone le projet** :

    ```bash
    git clone https://github.com/ton-utilisateur/tsikonina.git
    cd tsikonina
    ```

2.  **Installe les dépendances PHP** :
    Si tu n'as pas encore installé Composer, [installe-le ici](https://getcomposer.org/).

    ```bash
    composer install
    ```

3.  **Configure ton fichier `.env`** :
    Copie le fichier `.env.example` en `.env` et configure les variables d'environnement, notamment la connexion à la base de données :

    ```bash
    cp .env.example .env
    ```

    Ensuite, modifie les paramètres de la base de données dans le fichier `.env` selon ta configuration locale.

4.  **Génère la clé d'application Laravel** :

    ```bash
    php artisan key:generate
    ```

5.  **Installe les dépendances frontend** :
    Si tu n'as pas encore installé pnpm, [installe-le ici](https://pnpm.io/).
    Ensuite, dans le répertoire du projet, exécute :

    ```bash
    pnpm install
    ```

6.  **Migrations de la base de données** :
    Si tu utilises des migrations pour la base de données, exécute la commande suivante pour créer les tables nécessaires :

    ```bash
    php artisan migrate
    ```

7.  **Ajouter un raccourci vers le répertoire de stockage dans le dossier public** :
    Pour démarrer l'application en local et rendre les fichiers accessibles, exécute la commande suivante :

        ```bash
        php artisan storage:link
        ```

8.  **Lancer le serveur de développement** :
    Pour démarrer l'application en local, exécute :

    ```bash
    php artisan serve
    ```

    L'application sera disponible à l'adresse `http://localhost:8000`.

9.  **Compiler les assets frontend** :
    Pour compiler les fichiers CSS et JS avec Tailwind CSS, exécute :

    ```bash
    pnpm run dev
    ```

10. **Accéder à l'application** :
    Ouvre ton navigateur et va à `http://localhost:8000`.

## Structure du projet

-   **app/** : Contient la logique métier de l'application, comme les contrôleurs, les modèles et les vues.
-   **resources/views/** : Contient les fichiers Blade pour les vues de l'application.
-   **public/** : Contient les fichiers accessibles publiquement, tels que les images, CSS et JS compilés.
-   **routes/web.php** : Contient les routes de l'application.
-   **database/migrations/** : Contient les fichiers de migration pour la base de données.

## Contribuer

Si tu veux contribuer à ce projet, tu peux suivre ces étapes :

1. Fork ce projet.
2. Crée une branche pour ta fonctionnalité (`git checkout -b feature/ma-fonctionnalité`).
3. Fais tes changements et assure-toi que tout fonctionne.
4. Soumets un pull request.

## Licence

Ce projet est sous licence MIT.
