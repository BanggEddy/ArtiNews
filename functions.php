<?php

/**
 * Récupère la BDD
 */
function get_articles(): array {
    return json_decode(file_get_contents('bdd.json'), true);
}

/**
 * Met à jour la BDD
 */
function rewrite_bdd($articles) {
    $json = json_encode($articles, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    file_put_contents('bdd.json', $json);
}
