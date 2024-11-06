<?php
require_once('../../config/config.php');
require_once('../../services/articles-services.php');

//the path to my JSON file
$path = '../../model/articles.json';

$jsonArticles = findArticle($path);

require_once('../../view/exosSup/articlesNewSubmitted-view.php');
