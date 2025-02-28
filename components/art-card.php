<?php require_once 'db/category-db.php' ?>


<div class="card">
    <img src='<?php echo $article['image'] ?>' class="card-img-top" alt='<?php echo $article['slug'] ?>'>
    <div class="card-body">
        <h5 class="card-title"><?php echo $article['title'] ?></h5>
        <p class="card-text"><?php echo substr($article['content'], 0, 30) ?></p>
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item"><?php echo $article['label'] ?></li>
        <li class="list-group-item"><?php echo $article['author'] ?></li>
        <li class="list-group-item"><?php echo $article['published_at'] ?></li>
    </ul>
    <div class="card-body">
        <a href="../article.php?id=<?php echo $article['id'] ?>" class="card-link">Read</a>
    </div>
</div>