<?php

require_once('../../services/authentification-service.php');
//je vérifie que la personne est bien connecté pour avoir accès à cette page
redirectNotLoggedUser();

$isArticleCreated = false;
$isPostSubmitted = false;

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

        // je convertis mon article en json
        $jsonString = json_encode($article, JSON_PRETTY_PRINT);

        // j'ouvre le fichier json, je stocke mon article dedans et je ferme le fichier json
        $fp = fopen($path, 'w');
        fwrite($fp, $jsonString);
        fclose($fp);

        $isArticleCreated = true;
    }
} ?>

<?php require_once('../../view/admin/insertArticle-view.php'); ?>