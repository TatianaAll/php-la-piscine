<?php
$articles = [
    'article 1' => [
        'title' => "article 1",
        'image' => "../../profilePic/dog.png",
        'content' => "coucoucoucoucoucoucoucoucoucoucoucoucoucoucoucoucoucou",
        "isPublished" => true,
    ],
    'article 2' => [
        'title' => "article 2",
        'image' => "../../profilePic/cat.png",
        'content' => "Lorem ipsum dolor sit amet",
        "isPublished" => true,
    ],
    'article 3' => [
        'title' => "article 3",
        'image' => "../../profilePic/bear.png",
        'content' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do",
        "isPublished" => false,
    ],
    'article 4' => [
        'title' => "article 4",
        'image' => "../../profilePic/duck.png",
        'content' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do Lorem ipsum dolor sit amet, consectetur adipiscing elit",
        "isPublished" => true,
    ]];

function limitNbCaracter($article)
{
    return (mb_strlen($article['content'], "UTF-8") > 50);
}


function shortString($article)
{
    return substr($article['content'], 0, 50);
}

require_once('../../view/guest/articles-view.php');
?>