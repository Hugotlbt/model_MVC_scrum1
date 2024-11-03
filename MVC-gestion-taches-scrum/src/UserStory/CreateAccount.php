<?php

namespace App\UserStory;

use App\Entity\User;
use Doctrine\ORM\EntityManager;

class CreateAccount
{
    protected EntityManager $entityManager;

    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function execute(string $pseudo, string $email, string $password) : User
    {
        // Vérifier que des données sont présentes
        if (empty($pseudo) || empty($email) || empty($password)) {
            throw new \Exception("Aucune donnée rentrée.");
        }

        // Vérifier si l'email est valide
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new \Exception("L'adresse email $email n'est pas valide.");
        }

        // Vérifier si la longueur du pseudo est entre 2 et 50 caractères
        if (strlen($pseudo) < 2 || strlen($pseudo) > 50) {
            throw new \Exception("Le pseudo doit faire entre 2 et 50 caractères.");
        }

        // Vérifier si le mot de passe est sécurisé
        if (strlen($password) < 8 || !preg_match('/[A-Z]/', $password) || !preg_match('/\d/', $password)) {
            throw new \Exception("Le mot de passe doit faire au moins 8 caractères, incluant une lettre majuscule et un chiffre.");
        }

        // Vérifier l'unicité de l'email
        if ($this->entityManager->getRepository(User::class)->findOneBy(['email' => $email])) {
            throw new \Exception("L'email $email est déjà utilisé.");
        }

        // Hasher le mot de passe
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        // Créer une instance de la classe User avec l'email, le pseudo et le mot de passe haché
        $user = new User();
        $user->setPseudo($pseudo);
        $user->setEmail($email);
        $user->setPassword($hashedPassword);

        // Persister l'instance en utilisant l'entity manager
        $this->entityManager->persist($user);
        $this->entityManager->flush();

        return $user;
    }
}
