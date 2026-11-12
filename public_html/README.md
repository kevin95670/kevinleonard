# Kevin Léonard · Portfolio

Portfolio et site de services de Kevin Léonard, développeur full-stack PHP à Cherbourg.

Site en ligne : https://kevinleonard.fr

## Fonctionnalités

- Pages : accueil, projets, services, parcours, contact, mentions légales
- Formulaire de contact avec envoi par e-mail
- Page 404 personnalisée
- Site responsive (mobile, tablette, ordinateur)

## Technologies

- PHP 8.3
- HTML, Sass, JavaScript
- Docker (environnement local)

## Installation

```bash
git clone https://github.com/kevin95670/kevinleonard.git
cd kevinleonard/public_html
docker compose up
```

- Site : http://localhost:8080
- Mails de test (Mailpit) : http://localhost:8025

Le CSS est compilé automatiquement depuis `sass/` vers `css/principal.css`.

## Structure

```
public_html/
├── includes/    en-tête, pied de page, données
├── sass/        styles
├── css/         CSS compilé
├── js/          scripts
├── images/
└── *.php        pages du site
```

## Auteur

Kevin Léonard · https://kevinleonard.fr · https://github.com/kevin95670
