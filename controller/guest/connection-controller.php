<?php
require_once('../../config/config.php');

//je déclare 2 variables qui me permettent de suivre si le form a été envoyé et si l'authentification à eu lieu
$isAuthenticated = false;
$isFormSubmitted = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//    le form à bien été soumis car on a bien un verbe de serveur === POST
    $isFormSubmitted = true;
//    on vérifie que l'email existe et le password aussi
    if ($_POST['mailId'] === 'tatiana@gmail.com'
        && $_POST['password'] === '1234'
        && $_POST['password'] === $_POST['password2']) {

        //    on crée un espace de stockage pour pouvoir reconnaitre contre utilisateur sur toutes les pages de notre site pour ça on utilise session_start();
        session_start();
        $_SESSION['isAuthenticated'] = true;
        $isAuthenticated = true;
    }
//    superglobale $_SESSION qui permet d'accéder à la session de l'utilisateur, je peut y stocker des infos de reconnaissance/pour vérifier si l'utilisateur est bine connecté
}; ?>


<?php require_once('../../view/guest/connection-view.php'); ?>