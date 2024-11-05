<?php require_once "../../view/guest/partials/_header.php" ?>

    <section>

        <?php foreach ($articles as $article) { ?>

            <?php if ($article['isPublished']) { ?>

                <article>
                    <h2>
                        <?php echo $article['title'] ?>
                    </h2>
                    <div class="imgContainer">
                        <img src="<?php echo $article['image'] ?>" class="img"/>
                    </div>

                    <?php if (limitNbCaracter($article)) { ?>
                        <p><?php echo shortString($article) ?></p>
                    <?php } else { ?>
                        <p>
                            <?php echo $article['content'] ?>
                        </p>
                    <?php } ?>
                </article>

            <?php } else { ?>
                <hr/>
                <p>En cours de rédaction</p>
                <hr/>
            <?php }
        } ?>

    </section>

<?php require_once "../../view/guest/partials/_footer.php" ?>