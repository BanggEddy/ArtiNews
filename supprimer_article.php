<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $index = $_POST['index'];
    
    $json = file_get_contents('bdd.json');         
    $articles = json_decode($json, true);
    
    unset($articles[$index]);
    
    file_put_contents('bdd.json', json_encode(array_values($articles)));
    
    header('Location: supprimerpage_article.php');
}
?>
