<?php

if (
    !empty($_POST['titre'])
    && !empty($_POST['contenu'])
    && !empty($_POST['auteur'])

    && !empty($_POST['image'])
    && !empty($_POST['date'])

    && date_create($_POST['date']) !== false
) {
    // J'ajoute l'article puis je sauvegarde
    include 'functions.php';
    $articles = get_articles();
    $articles[] = [
        'titre' => $_POST['titre'],
        'image' => $_POST['image'],
        'auteur' => $_POST['auteur'],
        'contenu' => $_POST['contenu'],
        'date' => $_POST['date'],
    ];

    rewrite_bdd($articles);
    header('location: index.php');
} else {
    header('location: ajouter_article.php?error=true');
}