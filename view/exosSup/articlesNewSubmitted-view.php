<?php require_once "../view/partials/_header.php" ?>

<section>
    <h2>
        <?php echo $jsonArticle['title']; ?>
    </h2>
    <p>
        <?php echo $jsonArticle['content']; ?>
    </p>
    <p>
        <?php echo $jsonArticle['image']; ?>
    </p>
</section>

<?php require_once "../view/_footer.php" ?>
