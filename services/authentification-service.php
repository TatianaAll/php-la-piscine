<?php

function redirectNotLoggedUser(){
    session_start();
    if (!key_exists('isAuthenticated', $_SESSION)
        || !$_SESSION['isAuthenticated']) {
        header('location: http://localhost/exercice1-les-bases/controller/guest/connection-controller.php');
    }
}