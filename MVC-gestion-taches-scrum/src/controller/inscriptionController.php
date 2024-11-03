<?php

namespace App\Controllers;

use App\UserStory\CreateAccount;
use Doctrine\ORM\EntityManager;
use App\Entity\User;

class InscriptionController
{
    protected EntityManager $entityManager;
    protected CreateAccount $createAccount;

    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
        $this->createAccount = new CreateAccount($this->entityManager);
    }

    public function index()
    {
        // Afficher la page d'inscription
        require 'src/views/inscription.php';
    }

    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $pseudo = trim($_POST['pseudo']);
            $email = trim($_POST['email']);
            $password = trim($_POST['password']);

            try {
                // Tenter de créer un compte
                $user = $this->createAccount->execute($pseudo, $email, $password);
                $_SESSION['message'] = "Inscription réussie ! Vous pouvez maintenant vous connecter.";
                header('Location: index.php?controller=Login&action=index');
                exit;
            } catch (\Exception $e) {
                $_SESSION['message'] = $e->getMessage();
                header('Location: index.php?controller=Inscription&action=index');
                exit;
            }
        }
    }
}
