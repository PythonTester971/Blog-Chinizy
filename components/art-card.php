<?php require_once 'db/article-db.php' ?>


<div class="card">
    <img class="card-image" src='<?php echo $article['image'] ?>' class="card-img-top" alt='<?php echo $article['slug'] ?>'>
    <div class="card-body">
        <h5 class="card-title d-inline"><?php echo $article['title'] ?></h5>
        <p class="card-text"><?php echo substr($article['content'], 0, 30) ?></p>
    </div>
    <ul class="list-group list-group-flush">

        <li class="list-group-item">
            <span class="rounded-pill p-2 text-white" style="background-color:<?php echo $article['color'] ?>;"><?php echo $article['label'] ?>
            </span>
        </li>
        <li class="list-group-item">By <?php echo $article['author'] ?></li>
        <li class="list-group-item"><?php echo $article['published_at'] ?></li>
    </ul>
    <div class="card-body">
        <a href="../article.php?id=<?php echo $article['id'] ?>" class="card-link">Lire l'article</a>
    </div>
</div>