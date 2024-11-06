<?php require_once('../../view/guest/partials/_header.php'); ?>

<section>
    <?php foreach ($jsonArticles as $article) { ?>
        <h2>
            <?php echo $article['title']; ?>
        </h2>
        <p>
            <?php echo $article['category'] ?>
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
