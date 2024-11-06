<?php
require_once('../../config/config.php');
require_once('../../model/articles-repository.php');

//the path to my JSON file
$path = '../../model/articles.json';

//$jsonArticles = findArticle();

if (array_key_exists('category', $_GET)){
    $category = $_GET['category'];
    $jsonArticles = findArticleByCategory($category);
} else {
    $jsonArticles = findArticle();
}

require_once('../../view/exosSup/articlesNewSubmitted-view.php');
