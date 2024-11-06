<?php
function addArticle($article)
{
    $path = '../../model/articles.json';
    if (file_exists($path)) {
        $articles = findArticle();

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

function findArticle()
{
    $path = '../../model/articles.json';
    $jsonString = file_get_contents($path);
//        je dit que ce que j'ai récupéré depuis mon json est mes articles au pluriel
    $articles = json_decode($jsonString, true);
    return $articles;
}

function findArticleByCategory($category)
{
    $articles = findArticle();

// Filtrer les articles en fonction de la catégorie
    if ($category) {
//        array filter va filtrer les élément de mon tableau article et utilisant la catégorie comme comparateur
        $filteredArticles = array_filter($articles, function ($article) use ($category) {
            return $article['category'] === $category;
        });
    } else {
        // Si aucune catégorie n'est sélectionnée, afficher tous les articles
        $filteredArticles = $articles;
    }
    // Retourner les articles filtrés (ou non)
    return $filteredArticles;
}

;
