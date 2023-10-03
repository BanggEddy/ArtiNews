<?php
// Ce qui vient de l'URL, je peux l'obtenir grâce aux superglobales, et notamment $_GET
$index = $_GET['index'];

include 'articles.php';
if (empty($articles[$index])) { // On récupère notre article
    die('Erreur 404 : Page non trouvée.');
} else {
    $article = $articles[$index];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $article['titre'] ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

    <div class="flex gap-4">

        <div class="w-1/4 text-center p-16">
            <p>Auteur : <?= $article['auteur'] ?></p>
            <p>Date : <?= date_create($article['date'])->format('d/m/Y') ?></p>
        </div>

        <div class="w-3/4">
            <img src="<?= $article['image'] ?>" class="w-full object-cover" alt="">
            <h1 class="text-center text-bold text-lg my-8"><?= $article['titre'] ?></h1>

            <p><?= $article['contenu'] ?></p>
        </div>

    </div>

</body>

</html>