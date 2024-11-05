<?php require_once "./view/partials/_header.php" ?>


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
            <?php if ($_SERVER['REQUEST_METHOD'] === "POST") { ?>

                <?php if ($_POST['title'] &&
                    $_POST['content'] &&
                    $_POST['image'] &&
                    mb_strlen($_POST['title']) > 4 &&
                    mb_strlen($_POST['content']) > 10 &&
                    mb_strlen($_POST['title']) > 4) { ?>

                    <p>Vous avez soumis un article</p>
                    <p>Résumé de votre soumission</p>
                    <p>Le titre : <?php echo $_POST['title'] ?></p>
                    <p>Le contenu : <?php echo $_POST['content'] ?></p>
                    <p>L'illustration : <?php echo $_POST['image'] ?></p>

                    <?php
                    //je stocke toutes les valeurs dde mes input dans un tableau
                    $newArticle = [
                        "title" => $_POST['title'],
                        "content" => $_POST['content'],
                        "image" => $_POST['image']
                    ];
                    $path = './articles.json';

                    // Je converti mon fichier en JSON
                    $jsonEncode = json_encode($newArticle, JSON_PRETTY_PRINT);

//                    j'ouvre le fichier JSON, je stocke mon newArticle dedans et je referme le fichier
                    $filePath = fopen($path, 'w');
                    fwrite($filePath, $jsonEncode);
                    fclose($filePath);
                    ?>

                <?php } else { ?>
                    <p>Vos données ne sont pas valides</p>
                <?php } ?>

            <?php } ?>
        </div>
    </main>

<?php require_once '../view/partials/_footer.php' ?>