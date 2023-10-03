<?php
session_start(); // Démarrez la session

// Vérifiez si l'utilisateur est connecté
if(isset($_SESSION['user'])) {
    // Détruire la session
    session_destroy();
    // Redirigez l'utilisateur vers la page d'accueil ou une autre page après la déconnexion
    header("Location: index.php"); // Changez 'index.php' avec la page de votre choix
    exit();
} else {
    // Si l'utilisateur n'est pas connecté, redirigez-le vers la page d'accueil ou une autre page
    header("Location: index.php"); // Changez 'index.php' avec la page de votre choix
    exit();
}
?>
