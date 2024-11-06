<?php

require_once('../../services/authentification-service.php');
//je vérifie que la personne est bien connecté pour avoir accès à cette page
redirectNotLoggedUser();

$isArticleCreated = false;
$isPostSubmitted = false;


function addArticle($article, $path)
{
    if (file_exists($path)) {
//        je décode ce qu'il y a précédemment dans mon json
        $jsonString = file_get_contents($path);
//        je dit que ce que j'ai récupéré depuis mon json est mes articles au pluriel
        $articles = json_decode($jsonString, true);

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

//    // j'ouvre le fichier json, je stocke mon article dedans et je ferme le fichier json
//    $fp = fopen($path, 'w');
//    fwrite($fp, $jsonString);
//    fclose($fp);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $isPostSubmitted = true;

    if ($_POST['title'] &&
        $_POST['content'] &&
        $_POST['image'] &&
        mb_strlen($_POST['title']) > 3 &&
        mb_strlen($_POST['content']) > 4 &&
        mb_strlen($_POST['image']) > 2
    ) {

        // je créé un tableau contenant toutes mes valeurs issues du formulaire
        $article = [
            "title" => $_POST['title'],
            "content" => $_POST['content'],
            "image" => $_POST['image'],
        ];

        // je récupère le chemin du fichier json qui servira à stocker les données
        $path = '../../model/articles.json';
        addArticle($article, $path);

        $isArticleCreated = true;
    }
};
?>

<?php require_once('../../view/admin/insertArticle-view.php'); ?>