<?php require_once "../../view/guest/partials/_header.php" ?>

<h1>Contactez-nous !</h1>

<form action="" method="post">

    <label for="name">Votre nom</label>
    <input type="text" name="name" id="name" placeholder="Votre nom"/>

    <label for="prenom">Votre prénom</label>
    <input type="text" name="prenom" id="prenom" placeholder="Votre prenom"/>

    <label for="subject">Le sujet de votre message</label>
    <input type="text" name="subject" id="subject" placeholder="Titre de votre message"/>

    <label for="message">Votre message</label>
    <input type="text" name="message" id="message" placeholder="Votre message gentil"/>

    <input type="submit" value="Envoyer"/>

</form>

<div>
    <?php if ($isFormValid) { ?>
        <?php if ($isMessageSubmitted) { ?>
            <p>Votre message a bien été envoyé à nos équipe, merci de votre retour</p>

        <?php } else if (!$isMessageSubmitted) { ?>
            <p>Il semble y avoir une erreur dans votre formulaire</p>

            <?php
        }
    } ?>

</div>

<?php require_once "../../view/guest/partials/_footer.php" ?>
