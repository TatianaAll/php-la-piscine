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

        <label for="categories">La catégorie de l'article</label>
        <select name="categories" id="categories">
            <option value="" selected disabled>Choix d'une catégorie</option>
            <option value="ecologie">Ecologie</option>
            <option value="meteorologie">Météo</option>
            <option value="fetes">Les fêtes à venir</option>
        </select>

        <input type="submit" value="Envoyer"/>

    </form>
    <div>
        <?php if ($isPostSubmitted) { ?>
            <?php if ($isArticleCreated) { ?>
                <p>Vous avez soumis un article</p>

            <?php } else { ?>

                <p>Vous n'avez pas remplit toutes les conditions de soumission pour votre article</p>

            <?php } ?>
        <?php } ?>

    </div>
</main>

<?php require_once "../../view/admin/partials/_footer-admin.php" ?>
