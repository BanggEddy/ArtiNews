<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérez les identifiants saisis par l'utilisateur
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Chargez les données des utilisateurs depuis bdd.php
    include 'articles.php';

    // Vérifiez les identifiants de l'utilisateur
    if ($utilisateur[0]['email'] === $email && $utilisateur[0]['p'] === $password) {
        // L'utilisateur est connecté avec succès, enregistrez dans la session
        $_SESSION['loggedin'] = true;
        $_SESSION['email'] = $email;
        setcookie('loggedin', 'true', time() + 15, '/'); 
        // Redirigez vers la page des articles
        header('Location: page_article.php');
        exit();
    } else {
        // Si les identifiants ne correspondent à aucun utilisateur
        header('Location: index.php?error=true');
        exit();
    }
}
?>
