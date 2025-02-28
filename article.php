<?php

require 'db/article-db.php';






$id = $_GET['id'];

$article =  getArticleWithCategory($id);


?>


<?php include_once 'components/header.php' ?>

<main>
    <div class="container">


        <div class="mb-4">
            <img src='<?php echo $article['image'] ?>' alt='<?php $article['slug'] ?>' classe="w-60">
        </div>

        <h1><?php echo $article['title']; ?></h1>

        <ul class="list-inline">
            <li class="list-inline-item"><span class="rounded-pill p-2 text-white" style="background-color:<?php echo $article['color'] ?>;"><?php echo $article['label'] ?></span></li>
            <li class="list-inline-item"><?php echo $article['published_at']; ?></li>
        </ul>

        <p class="mt-4"><?php echo $article['content']; ?></p>

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