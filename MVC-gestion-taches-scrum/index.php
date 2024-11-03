<?php
session_start(); // Démarre la session

require 'config/bootstrap.php'; // Charge l'EntityManager

// Incluez les contrôleurs
require 'src/controller/InscriptionController.php';
require 'src/controller/LoginController.php';

// Logique de routage
$controller = $_GET['controller'] ?? 'Inscription';
$action = $_GET['action'] ?? 'index';

// Création d'une instance du contrôleur approprié
switch ($controller) {
    case 'Inscription':
        $controllerInstance = new App\Controllers\InscriptionController($entityManager);
        break;
    case 'Login':
        $controllerInstance = new App\Controllers\LoginController($entityManager);
        break;
    default:

        exit('Controller not found');
}

// Vérifiez si l'utilisateur est connecté
$user = null;
if (isset($_SESSION['user_id'])) {
    $user = $entityManager->getRepository(App\Entity\User::class)->find($_SESSION['user_id']);
}

// Appel de la méthode d'action appropriée
$controllerInstance->{$action}();

