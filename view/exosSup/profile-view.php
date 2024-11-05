<?php require_once "../view/partials/_header.php" ?>

<main>
    <?php if ($isPublished) { ?>
        <h1>
            Bonjour <?php echo $profile['firstName']; ?>
        </h1>
        <div>
            <h2>Votre profil :</h2>
            <p>
                <?php echo $nameConnected ?></p>
            <p>Age : <?php echo $profile['age'] ?></p>
            <p>Votre job : <?php echo $profile['job'] ?></p>
            <p>Vos compétences :
                <br/>
                <?php foreach ($profile["skills"] as $skill) {
                    echo $skill ?> <br/> <?php ;
                }
                ?></p>
        </div>
    <?php } else { ?>
        <p>
            Bonjour, veuillez créer un compte pour avoir vos informations
        </p>
    <?php } ?>
</main>


<?php require_once('../view/partials/_footer.php') ?>

