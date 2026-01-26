# TifawinSouk – Application Web de Gestion de Catalogue

## 📌 Contexte du projet

Dans le cadre de la digitalisation de son activité, **TifawinSouk**, une PME marocaine spécialisée dans le commerce local, souhaite disposer d’une application web permettant :
- Un back-office pour la gestion des catégories et des produits.
- Une interface publique minimale pour permettre aux clients de consulter le catalogue.

---

## 🎯 Objectifs

### Personnel administratif
- Gérer les catégories (CRUD).
- Gérer les produits (CRUD).
- Accéder à un back-office sécurisé.

### Clients
- Parcourir les catégories.
- Consulter les produits par catégorie.
- Voir le détail d’un produit.

---

## ⚙️ Fonctionnalités clés

### Authentification
- Accès sécurisé au back-office (administrateur).

### Gestion des catégories
- Création, modification, suppression, affichage.
- Champs : id, nom, slug, description.

### Gestion des produits
- Création, modification, suppression, affichage.
- Champs : id, nom, référence, description courte, prix, stock, catégorie_id, image.

### Interface publique
- Liste des catégories.
- Liste des produits par catégorie (pagination).
- Détail produit.

### Validation & sécurité
- Validation côté serveur.
- Upload d’images.
- Notifications succès/erreur.

---

## 🧰 Technologies

- Laravel
- Blade
- MySQL / MariaDB
- Laravel Breeze / UI
- HTML, CSS, JavaScript

---

## 🧑‍💻 User Stories

- Connexion administrateur.
- Gestion des catégories et produits.
- Consultation publique du catalogue.

---

## ⭐ Bonus

- SoftDeletes
- Seeders & Factories
- Recherche et filtres

---

## 🚀 Installation

```bash
git clone https://github.com/username/tifawinsouk.git
cd tifawinsouk
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
php artisan serve
```

---

## 📄 Licence

Projet pédagogique – YouCode
