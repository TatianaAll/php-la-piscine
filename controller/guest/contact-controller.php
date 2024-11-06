<?php

require_once('../../config/config.php');

$isFormValid = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $isMessageSubmitted = false;
    if ($_POST['name']
        && $_POST['prenom']
        && $_POST['subject']
        && $_POST['message']
        && mb_strlen($_POST['name']) > 0
        && mb_strlen($_POST['prenom']) > 0
        && mb_strlen($_POST['message']) > 0
        && mb_strlen($_POST['subject']) > 0) {
//
//        // je récupère le chemin du fichier json qui servira à stocker les données
//        $path = '../message.json';
//
//        // je convertis mon article en json
//        $jsonString = json_encode($message, JSON_PRETTY_PRINT);
//
//        // j'ouvre le fichier json, je stocke mon article dedans et je ferme le fichier json
//        $fp = fopen($path, 'w');
//        fwrite($fp, $jsonString);
//        fclose($fp);

        $isMessageSubmitted = true;
        $isFormValid = true;
    };
}


require_once('../../view/guest/contact-view.php');