<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $index = $_POST['index'];
    $titre = $_POST['titre'];
    $contenu = $_POST['contenu'];
    $date = $_POST['date'];
    $image = $_POST['image'];
    $auteur = $_POST['auteur'];

    
    $json = file_get_contents('bdd.json');         
    $articles = json_decode($json, true);

    // Mettez à jour les valeurs de l'article
    $articles[$index]['titre'] = $titre;
    $articles[$index]['contenu'] = $contenu;
    $articles[$index]['date'] = $date;
    $articles[$index]['image'] = $image;
    $articles[$index]['auteur'] = $auteur;

    // Enregistrez les modifications dans le fichier JSON
    file_put_contents('bdd.json', json_encode($articles));

    header('Location: modifierpage_article.php'); // Redirection vers la page principale après modification
}
?>
