<p align="center">
    <img src="public/images/logo.png" height="128">
</p>

## À propos

**Admin Services** est un site Internet permettant aux utilisateurs de publier des applications web et de les utiliser. **Admin Services** propose un panneau d'accueil permettant aux utilisateurs d'utiliser des widgets ou d'épingler des applications web.

## Installation

### 1. Cloner le dépôt

```bash
git clone https://github.com/enioaiello/admin-services.git
```

### 2. Installer les dépendances

```bash
composer install
npm install
```

### 3. Configurer l'environnement

> [!IMPORTANT]  
> Dans le fichier ``.env``, mettez d'abord le compte ``root`` puis générez la clé.
> Une fois la clé générée, utilisez une autre session pour configurer et utiliser la base de données.

```bash
cp .env.example .env
php artisan key:generate
```

### 4. Configurer la base de données

```bash
docker exec -it laravel_app php artisan migrate
```

### 5. Lancer le serveur

> [!NOTE]  
> Retirez l'argument ``--build`` si vous avez déjà construit l'image.

```bash
docker-compose up -d --build
```

### 6. Accéder au site

Ouvrez votre navigateur et accédez à l'adresse ``http://localhost:8080``.

## Fonctionnalités

La plupart des fonctionnalités sont en cours de développement. Elles sont directement reprises de la version ["legacy" du projet](https://github.com/enioaiello/admin-services-legacy).

Les fonctionnalités suivantes sont prévues pour le projet :

- [ ] Authentification
- [ ] Page d'accueil
- [ ] Applications par défaut
- [ ] Widgets par défaut
- [ ] Écran de verrouillage
- [ ] Support

### Authentification

- [ ] Inscription
- [ ] Connexion
- [ ] Déconnexion
- [ ] Comptes locaux

### Page d'accueil

- [ ] Applications récentes
- [ ] Applications épinglées
- [ ] Widgets
- [ ] Liens rapides (annonces, support, etc.)
- [ ] Personnalisation des catégories (accueil, applications, widgets, services, annonces, support, astuces)
- [ ] Fonds d'écran

### Applications par défaut

- [ ] Accueil
- [ ] Paramètres
- [ ] Support
- [ ] Services
- [ ] Astuces
- [ ] Annonces
- [ ] Centre de sécurité

### Applications par défaut prévues :

- Éditeur de texte
- Messagerie
- Boutique d'applications (permettant d'ajouter des applications)

### Widgets par défaut

- [ ] Calendrier
- [ ] Météo

### Écran de verrouillage

- [ ] Connexion par mot de passe
- [ ] Réinitialisation du mot de passe
- [ ] Fond d'écran
- [ ] Date et heure

### Support

- [ ] Centre d'aide
- [ ] Articles pour chaque fonctionnalité
- [ ] Communication avec les développeurs

## Technologies

- [Laravel](https://laravel.com)
- [PHP](https://www.php.net)
- [MySQL](https://www.mysql.com)

## Dépendances

Cette liste est toujours en rédaction.

## Licence

Ce projet utilise la licence MIT. Pour la consulter, veuillez lire le fichier ``LICENSE``.
