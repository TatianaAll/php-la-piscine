<?php
require_once('../../services/authentification-service.php');
//je vérifie que la personne est bien connecté pour avoir accès à cette page
redirectNotLoggedUser();

?>

<?php require_once('../../view/admin/index-admin-view.php'); ?>