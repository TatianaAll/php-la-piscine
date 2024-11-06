<?php

function findArticle($path)
{
    $jsonString = file_get_contents($path);
//        je dit que ce que j'ai récupéré depuis mon json est mes articles au pluriel
    $articles = json_decode($jsonString, true);
    return $articles;
}