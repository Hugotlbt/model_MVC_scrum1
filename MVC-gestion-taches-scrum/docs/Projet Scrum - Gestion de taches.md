# 📋 Projet de Découverte de SCRUM - BTS SIO 2ème Année

## 🗂️ Contexte du Projet

Ce projet a pour but d'introduire à la méthodologie SCRUM et aux User Stories. Il s'agit de développer une application simple de gestion de tâches à l'aide de PHP 8, en utilisant l'ORM Doctrine pour la base de données MySQL. Ce projet leur permettra de découvrir l'organisation d'un backlog, la rédaction de User Stories, ainsi que l'implémentation d'une application basée sur les besoins utilisateur. Aucun framework comme Symfony ne sera utilisé, ce qui permettra de se concentrer sur les concepts de base.

## 📋 Description du Projet

Le projet consiste à créer une application web permettant de gérer des tâches personnelles. L'utilisateur pourra créer un compte, se connecter, ajouter des tâches, les modifier, les marquer comme terminées ou les supprimer. Chaque fonctionnalité sera définie sous forme de User Story, chacune ayant des critères d'acceptation clairs.

### 🚀 Technologies Utilisées

- **PHP 8** : Pour le développement de l'application côté serveur.
- **Doctrine ORM** : Pour la gestion des interactions avec la base de données MySQL.
- **MySQL** : Base de données pour stocker les informations des utilisateurs et des tâches.

## 📄 User Stories du Projet

### 1. 🎯 Titre de la User Story : Création de Compte

**En tant que** : Utilisateur non enregistré

**Je veux** : Créer un compte sur la plateforme

**Afin de** : Pouvoir accéder à l'application et gérer mes tâches

#### 2. 🔍 Description de la User Story

L'utilisateur non enregistré souhaite créer un compte afin de pouvoir accéder aux fonctionnalités de l'application, comme la création et la gestion des tâches. Le formulaire d'inscription doit être simple et inclure des champs obligatoires.

#### 3. ✅ Critères d'Acceptation

1. L'utilisateur doit pouvoir accéder à un formulaire d'inscription via un bouton "S'inscrire".
2. Le formulaire doit inclure les champs suivants : nom, e-mail, mot de passe.
3. L'utilisateur doit recevoir un e-mail de confirmation après inscription.
4. Le mot de passe doit respecter une politique de sécurité (au moins 8 caractères, incluant une lettre majuscule et un chiffre).
5. Le mot de passe doit être hashé avant d'être enregistré dans la base de données.
6. Les champs nom, e-mail et mot de passe sont obligatoires.

#### 4. 📊 Données et Règles Métier

- **Nom** : Obligatoire, chaîne de caractères entre 2 et 50 caractères.
- **E-mail** : Obligatoire, unique, doit respecter un format valide.
- **Mot de passe** : Obligatoire, doit respecter les critères de sécurité mentionnés.

#### 5. ⏱️ Estimation

- **Complexité** : Moyenne
- **Temps estimé** : 2 jours

#### 6. 📌 Dépendances

- Dépend de l'implémentation du système d'envoi d'e-mails.

#### 7. 💡 Remarques et Questions

- Quelles doivent être les actions possibles si l'utilisateur ne reçoit pas l'e-mail de confirmation ?

#### 8. 👥 Parties Prenantes Concernées

- **Product Owner** : Pour valider les champs du formulaire et les règles de validation.
- **Équipe de Développement** : Pour implémenter le formulaire et la logique d'inscription.

---

### 2. 🎯 Titre de la User Story : Connexion

**En tant que** : Utilisateur enregistré

**Je veux** : Me connecter à la plateforme

**Afin de** : Accéder à mes tâches et les gérer

#### 2. 🔍 Description de la User Story

L'utilisateur enregistré souhaite se connecter à l'application pour accéder à ses tâches et les gérer. Le processus de connexion doit être sécurisé et simple.

#### 3. ✅ Critères d'Acceptation

1. L'utilisateur doit pouvoir accéder à un formulaire de connexion via un bouton "Se connecter".
2. Le formulaire doit inclure les champs : e-mail et mot de passe.
3. L'utilisateur doit recevoir un message d'erreur si les informations fournies sont incorrectes.
4. Le mot de passe doit être comparé à la version hashée enregistrée en base de données.
5. Les champs e-mail et mot de passe sont obligatoires.

#### 4. 📊 Données et Règles Métier

- **E-mail** : Doit exister en base de données.
- **Mot de passe** : Doit correspondre au mot de passe hashé stocké.

#### 5. ⏱️ Estimation

- **Complexité** : Basse
- **Temps estimé** : 1 jour

#### 6. 📌 Dépendances

- Dépend de la création du compte utilisateur.

#### 7. 💡 Remarques et Questions

- Ajouter une option de réinitialisation de mot de passe ?

#### 8. 👥 Parties Prenantes Concernées

- **Équipe de Développement**

---

### 3. 🎯 Titre de la User Story : Ajout de Tâche

**En tant que** : Utilisateur connecté

**Je veux** : Ajouter une nouvelle tâche

**Afin de** : Organiser mes tâches à accomplir

#### 2. 🔍 Description de la User Story

L'utilisateur souhaite pouvoir ajouter de nouvelles tâches pour les organiser et suivre leur avancement. Chaque tâche peut contenir un titre, une description et une date limite.

#### 3. ✅ Critères d'Acceptation

1. L'utilisateur doit pouvoir accéder à un formulaire d'ajout de tâche via un bouton "Ajouter une tâche".
2. Le formulaire doit inclure les champs : titre de la tâche, description, et date limite.
3. La tâche doit être ajoutée à la liste des tâches de l'utilisateur après validation.
4. Le champ titre est obligatoire.

#### 4. 📊 Données et Règles Métier

- **Titre** : Obligatoire, chaîne de caractères entre 2 et 255 caractères.
- **Description** : Facultative.
- **Date limite** : Facultative.

#### 5. ⏱️ Estimation

- **Complexité** : Basse
- **Temps estimé** : 1 jour

#### 6. 📌 Dépendances

- L'utilisateur doit être connecté.

#### 7. 💡 Remarques et Questions

- Faut-il permettre d'ajouter des sous-tâches ?

#### 8. 👥 Parties Prenantes Concernées

- **Équipe de Développement**

---

### 4. 🎯 Titre de la User Story : Modification de Tâche

**En tant que** : Utilisateur connecté

**Je veux** : Modifier une tâche existante

**Afin de** : Mettre à jour les informations de la tâche

#### 2. 🔍 Description de la User Story

L'utilisateur souhaite pouvoir modifier une tâche existante afin de mettre à jour les informations telles que le titre, la description, ou la date limite.

#### 3. ✅ Critères d'Acceptation

1. L'utilisateur doit pouvoir accéder à une page de modification en cliquant sur une tâche existante.
2. Le formulaire de modification doit pré-remplir les champs avec les valeurs actuelles.
3. Les modifications doivent être enregistrées en base de données après validation.

#### 4. 📊 Données et Règles Métier

- Toutes les modifications doivent être validées avant enregistrement.

#### 5. ⏱️ Estimation

- **Complexité** : Moyenne
- **Temps estimé** : 1,5 jour

#### 6. 📌 Dépendances

- La tâche doit exister.

#### 7. 💡 Remarques et Questions

- Peut-on modifier la date limite après l'échéance ?

#### 8. 👥 Parties Prenantes Concernées

- **Équipe de Développement**

---

### 5. 🎯 Titre de la User Story : Marquer une Tâche comme Terminée

**En tant que** : Utilisateur connecté

**Je veux** : Marquer une tâche comme terminée

**Afin de** : Suivre mon avancement et voir les tâches complétées

#### 2. 🔍 Description de la User Story

L'utilisateur souhaite pouvoir marquer une tâche comme terminée afin de suivre son avancement dans la réalisation des tâches prévues.

#### 3. ✅ Critères d'Acceptation

1. L'utilisateur doit pouvoir cliquer sur une case à cocher à côté de chaque tâche pour la marquer comme terminée.
2. Une fois la tâche terminée, elle doit être visuellement différenciée (ex. barrée ou grisée).
3. La tâche doit être mise à jour en base de données avec son statut de "terminée".

#### 4. 📊 Données et Règles Métier

- **Statut** : Peut être "pending" ou "completed".

#### 5. ⏱️ Estimation

- **Complexité** : Basse
- **Temps estimé** : 0,5 jour

#### 6. 📌 Dépendances

- La tâche doit exister.

#### 7. 💡 Remarques et Questions

- Les tâches terminées doivent-elles être automatiquement archivées ?

#### 8. 👥 Parties Prenantes Concernées

- **Équipe de Développement**

---

### 6. 🎯 Titre de la User Story : Suppression de Tâche

**En tant que** : Utilisateur connecté

**Je veux** : Supprimer une tâche

**Afin de** : Retirer des tâches qui ne sont plus nécessaires

#### 2. 🔍 Description de la User Story

L'utilisateur souhaite pouvoir supprimer une tâche afin de retirer de sa liste des tâches qui ne sont plus nécessaires ou pertinentes.

#### 3. ✅ Critères d'Acceptation

1. L'utilisateur doit pouvoir accéder à une option de suppression pour chaque tâche.
2. Une confirmation doit être demandée avant la suppression définitive de la tâche.
3. La tâche doit être supprimée de la base de données après confirmation.

#### 4. 📊 Données et Règles Métier

- **Tâche** : Doit exister avant de pouvoir être supprimée.

#### 5. ⏱️ Estimation

- **Complexité** : Basse
- **Temps estimé** : 0,5 jour

#### 6. 📌 Dépendances

- L'utilisateur doit être connecté.

#### 7. 💡 Remarques et Questions

- Faut-il conserver un historique des tâches supprimées ?

#### 8. 👥 Parties Prenantes Concernées

- **Équipe de Développement**

---

### 7. 🎯 Titre de la User Story : Liste des Tâches de l'Utilisateur

**En tant que** : Utilisateur connecté

**Je veux** : Voir la liste de toutes mes tâches

**Afin de** : Avoir une vue d'ensemble de mes tâches à accomplir

#### 2. 🔍 Description de la User Story

L'utilisateur connecté souhaite pouvoir visualiser l'ensemble de ses tâches dans une liste. Cette liste doit afficher les informations essentielles de chaque tâche et permettre un accès rapide aux détails ou aux actions possibles sur chaque tâche.

#### 3. ✅ Critères d'Acceptation

1. L'utilisateur doit pouvoir accéder à une page listant toutes ses tâches.
2. La liste doit afficher pour chaque tâche : le titre, la date limite (si définie), et le statut (en cours ou terminée).
3. Les tâches doivent être triées par défaut avec les tâches non terminées en premier, puis par date limite (si définie).
4. L'utilisateur doit pouvoir cliquer sur une tâche pour accéder à ses détails ou la modifier.
5. La liste doit se mettre à jour automatiquement après l'ajout, la modification ou la suppression d'une tâche.

#### 4. 📊 Données et Règles Métier

- **Tâches** : Seules les tâches de l'utilisateur connecté doivent être affichées.
- **Date limite** : Les tâches sans date limite doivent apparaître après les tâches avec une date limite.
- **Statut** : Les tâches terminées doivent apparaître à la fin de la liste.

#### 5. ⏱️ Estimation

- **Complexité** : Moyenne
- **Temps estimé** : 1 jour

#### 6. 📌 Dépendances

- L'utilisateur doit être connecté.
- Les fonctionnalités d'ajout, de modification et de suppression de tâches doivent être implémentées.

#### 7. 💡 Remarques et Questions

- Faut-il implémenter une pagination pour les utilisateurs ayant beaucoup de tâches ?
- Devons-nous ajouter des options de filtrage ou de tri personnalisé ?

#### 8. 👥 Parties Prenantes Concernées

- **Équipe de Développement**
- **Product Owner** : Pour valider le format et l'ordre d'affichage des tâches.