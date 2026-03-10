# Laravel Authentication & Profile API

API REST développée avec **Laravel** permettant la gestion d’authentification utilisateur et la manipulation du profil.  
Cette API est **testable uniquement via Postman** (aucun frontend).

Le projet démontre la maîtrise de :

- Authentification par token
- Protection des routes API
- Gestion du profil utilisateur
- Validation des données
- Bonnes pratiques REST API

---

# Table of Contents

- [Project Context](#project-context)
- [Main Features](#main-features)
- [Tech Stack](#tech-stack)
- [Installation](#installation)
- [Environment Configuration](#environment-configuration)
- [Running the Project](#running-the-project)
- [Authentication](#authentication)
- [API Routes](#api-routes)
- [Profile Management](#profile-management)
- [API Documentation](#api-documentation)
- [Testing Scenario](#testing-scenario)
- [Security Rules](#security-rules)
- [Bonus - JWT Authentication](#bonus---jwt-authentication)
- [Project Structure](#project-structure)
- [Author](#author)

---

# Project Context

Vous êtes développeur Backend et devez livrer une **API Laravel sécurisée** permettant la gestion d’utilisateurs et de profils.

Cette API doit être **testable uniquement via Postman**.

Objectif :

- Gestion d'identité utilisateur
- Authentification par token
- Protection des routes
- Manipulation du profil utilisateur

---

# Main Features

L’API permet à un utilisateur de :

- Créer un compte
- Se connecter et obtenir un token
- Se déconnecter
- Consulter son profil
- Modifier ses informations
- Changer son mot de passe
- Supprimer son compte

Toutes les routes de gestion du profil sont **protégées par authentification**.

---

# Tech Stack

- **Laravel**
- **Laravel Sanctum** (Token Authentication)
- **MySQL**
- **Postman** (Testing API)
- **Swagger / Postman Collection** (Documentation)

---
