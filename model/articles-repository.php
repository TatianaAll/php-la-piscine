<?php
function addArticle($article, $path){
    if (file_exists($path)) {
        $articles = findArticle($path);

        // Si json_decode retourne null (erreur ou fichier vide), on initialise un tableau vide
        if ($articles === null) {
            $articles = [];
        }
    } else {
        // Si le fichier n'existe pas, je créer un tableau vide
        $articles = [];
    }
    // Ajouter l'article à la liste des articles
    $article['id'] = count($articles) + 1;  // Assigner un ID unique
    $articles[] = $article;

    // je convertis mon article en json
    $jsonString = json_encode($articles, JSON_PRETTY_PRINT);
    // Réécrire le contenu dans le fichier JSON
    file_put_contents($path, $jsonString);
}
function findArticle($path)
{
    $jsonString = file_get_contents($path);
//        je dit que ce que j'ai récupéré depuis mon json est mes articles au pluriel
    $articles = json_decode($jsonString, true);
    return $articles;
}