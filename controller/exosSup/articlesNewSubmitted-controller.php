<?php
//the path to my JSON file
$path = '../../model/articles.json';

//I get my JSON file content thank to the function fil_get_content
$articles = file_get_contents($path);

//Decode my JSON file into a variable $jsonString
$jsonArticles = json_decode($articles, true);
//true for transform in array, not object

//var_dump($jsonArticle);

require_once('../../view/exosSup/articlesNewSubmitted-view.php');
