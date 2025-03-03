<?php include_once './components/header.php';
require_once 'db/article-db.php';

$articles = getArticlesWithCategory();

?>

<h1>Archives</h1>

<div class="container">
    <div class="row g-5">

        <?php foreach ($articles as $article): ?>
            <div class="col-xl-3 col-lg-4">
                <?php include './components/art-card.php' ?>
            </div>
        <?php endforeach; ?>
    </div>
</div>



<?php include_once './components/footer.php' ?>