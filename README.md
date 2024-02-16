# Plateforme d'Emploi HireMe 
Bienvenue dans le guide du projet pour la plateforme d'emploi HireMe. Ce document présente le contexte du projet, les fonctionnalités requises et des fonctionnalités additionnelles, ainsi que des informations sur l'administration et la gestion des utilisateurs.

## Contexte du Projet
La société HireMe souhaite développer une plateforme d'emploi permettant aux utilisateurs de trouver des opportunités d'embauche et aux entreprises de publier leurs offres. Vous êtes chargé(e) de développer cette plateforme en utilisant le framework Laravel.

## Fonctionnalités Requises
### Authentification et Autorisation
Mettre en place un système d'authentification avec des rôles (Utilisateur standard (chercheur d'emploi), Entreprises et Administrateur).
Utilisation de politiques et de gardes pour régir l'accès aux profils et aux fonctionnalités spécifiques en fonction du rôle de l'utilisateur.
Les internautes peuvent s'inscrire (en tant qu'utilisateur normal ou entreprise) et se connecter avec leurs identifiants uniques.
Les utilisateurs peuvent récupérer leur mot de passe via l'option "Mot de passe oublié" ou rester connectés via l'option "Se souvenir de moi".
### Utilisateurs et Candidatures
Un utilisateur possède un nom, une photo de profil, un titre, un poste actuel, une industrie, une adresse, des informations de contact, une section "À propos" et un curriculum vitae.
Le curriculum vitae peut contenir plusieurs compétences, expériences professionnelles, cursus éducatifs et langues maîtrisées.
Un utilisateur a un profil complet comprenant un curriculum vitae détaillé.
Un utilisateur peut télécharger son curriculum vitae au format PDF de son profil.
Un utilisateur peut postuler à plusieurs offres d'emploi.
## Fonctionnalités Additionnelles
### Recherche d'Emploi
Un utilisateur peut rechercher un emploi par titre, compétences, type de contrat et emplacement.
Un utilisateur peut rechercher des entreprises, consulter leurs offres et s'abonner à leur newsletter pour recevoir les dernières offres.
### Entreprises et Gestion des Offres d'Emploi
Une entreprise possède un nom, un logo (photo de profil), un slogan, une industrie et une description.
Une entreprise peut publier plusieurs offres d'emploi.
Une entreprise peut consulter les candidatures reçues.
Une offre d'emploi est caractérisée par son nom d'entreprise, un titre, une description, un ensemble de compétences requises, un nombre de visites (bonus), un type de contrat (enum: à distance, hybride, à temps plein) et un emplacement.
### Administration et Gestion des Utilisateurs
Les administrateurs ont la possibilité de gérer les entreprises, les utilisateurs et les offres d'emploi (soft delete).
Les administrateurs ont la possibilité de visualiser les statistiques.
Ceci est une base pour le README du projet. Vous pouvez le personnaliser davantage en ajoutant des sections sur l'installation, l'utilisation, les technologies utilisées, etc. En outre, n'oubliez pas de mettre à jour ce document au fur et à mesure que le projet progresse. Bonne chance avec votre projet HireMe!