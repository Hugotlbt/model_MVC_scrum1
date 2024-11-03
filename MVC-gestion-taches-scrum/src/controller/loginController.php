<?php

namespace App\Controllers;

use App\Entity\User;

class LoginController
{
    protected $entityManager;

    public function __construct($entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function index()
    {
        require 'src/views/login.php';
    }

    public function authenticate()
    {
        session_start();

        $email = $_POST['email'] ?? null;
        $password = $_POST['password'] ?? null;

        $user = $this->entityManager->getRepository(User::class)->findOneBy(['email' => $email]);

        if ($user && password_verify($password, $user->getPassword())) {
            // Authentification réussie, stockez l'ID de l'utilisateur dans la session
            $_SESSION['user_id'] = $user->getId();
            $_SESSION['message'] = "Vous êtes connecté avec succès.";
            header('Location: index.php?controller=Login&action=index');
            exit();
        } else {
            $_SESSION['message'] = "E-mail ou mot de passe incorrect.";
            header('Location: index.php?controller=Login&action=index');
            exit();
        }
    }

    public function logout()
    {
        session_start(); // Assurez-vous que la session est démarrée
        session_destroy(); // Détruire la session
        header('Location: index.php?controller=Login&action=index');
        exit();
    }
}
