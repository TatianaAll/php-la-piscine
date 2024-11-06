<?php require_once('../../view/guest/partials/_header.php'); ?>
<?php require_once('../../model/articles-repository.php'); ?>

<section>
    <p>Filtrer les articles : </p>

    <form method="GET" action="">

        <label for="category">La catégorie :</label>
        <select name="category" id="category">
            <option value="" selected disabled>Choisir une catégorie</option>
            <option value="ecologie">Ecologie</option>
            <option value="meteorologie">Météo</option>
            <option value="fetes">Fêtes à venir</option>
            <option value="all">Toutes les catégories</option>
        </select>

        <input type="submit" name="submit" value="Submit">
    </form>

    <?php

    ?>

    <?php foreach ($jsonArticles as $article) { ?>
        <h2>
            <?php echo $article['title']; ?>
        </h2>
        <p>
            Catégorie : <?php echo $article['category'] ?>
        </p>
        <p>
            <?php echo $article['content']; ?>
        </p>
        <p>
            <?php echo $article['image']; ?>
        </p>
        <hr/>
    <?php } ?>
</section>

<?php require_once('../../view/guest/partials/_footer.php'); ?>
