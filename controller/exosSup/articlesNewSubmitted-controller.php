<?php
//the path to my JSON file
$path = '../../model/articles.json';

//I get my JSON file content thank to the function fil_get_content
$jsonString = file_get_contents($path);

//Decode my JSON file into a variable $jsonString
$jsonArticle = json_decode($jsonString, true);
//true for transform in array, not object

//var_dump($jsonArticle);

require_once('../../view/exosSup/articlesNewSubmitted-view.php')
?>