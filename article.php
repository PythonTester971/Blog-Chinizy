<?php

require 'db/article-db.php';






$id = $_GET['id'];

$article =  getArticleWithCategory($id);


?>


<?php include_once 'components/header.php' ?>

<main>
    <div class="container">


        <div>
            <img src='<?php echo $article['image'] ?>' alt='<?php $article['slug'] ?>' classe="w-60">
        </div>

        <h1><?php echo $article['title']; ?></h1>

        <ul class="list-inline">
            <li class="list-inline-item"><?php echo $article['label']; ?></li>
            <li class="list-inline-item"><?php echo $article['published_at']; ?></li>
        </ul>

        <p><?php echo $article['content']; ?></p>

        <ul>
            <li><?php echo $article['author']; ?></li>
        </ul>

        <div>
            <h2>Commentaires section</h2>
            <?php
            $article_id = $article['id'];
            require 'components/art-comment.php';
            ?>
        </div>
    </div>
</main>



<?php include_once 'components/footer.php' ?>