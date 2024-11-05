<?php require_once "../../view/admin/partials/_header-admin.php" ?>

<main>
    <h1>Créer un article</h1>

    <form action="" method="post">
        <label for="title">Le titre</label>
        <input type="text" name="title" id="title" placeholder="Entrez le titre de l'article"/>
        <label for="content">Le contenu de l'article</label>
        <input type="text" name="content" id="content" placeholder="Entrez le contenu de l'article"/>
        <label for="image">Une image d'illustration</label>
        <input type="text" name="image" id="image" placeholder="un tite image plz"/>
        <input type="submit" value="Envoyer"/>

    </form>
    <div>
        <?php if ($isPostSubmitted) { ?>
            <?php if ($isArticleCreated) { ?>
                <p>Vous avez soumis un article</p>

            <?php } else { ?>

                <p>Nope</p>

            <?php } ?>
        <?php } ?>

    </div>
</main>

<?php require_once "../../view/admin/partials/_footer-admin.php" ?>
