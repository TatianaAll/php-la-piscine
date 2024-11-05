<?php require_once "../../view/guest/partials/_header.php" ?>

    <form method="post">

        <label for="mailId">Votre identifiant</label>
        <input type="text" name="mailId" placeholder="Identifiant"/>

        <label for="password">Votre mot de passe</label>
        <input type="password" name="password" placeholder="Mot de passe"/>

        <label for="password2">Vérification du mot de passe</label>
        <input type="password" name="password2" placeholder="Vérification du mdp"/>


        <input type="submit"></input>

    </form>

<?php if ($isFormSubmitted) {

    if ($isAuthenticated) {
        header('location: http://localhost/exercice1-les-bases/controller/admin/index-admin-controller.php');
    } else { ?>

        <p>Utilisateur non reconnu</p>
    <?php } ?>

<?php } ?>
<?php require_once "../../view/guest/partials/_footer.php" ?>