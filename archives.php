<?php include_once './components/header.php';
require_once 'db/article-db.php';


if (isset($_POST['archives-categories']) && $_POST['archives-categories'] != NULL) {

    $category_id = $_POST['archives-categories'];
    $articles = getArticlesByCategory($category_id);
} else {

    $articles = getArticlesWithCategory();
}
?>

<main>
    <h1>Archives</h1>

    <div class="container">
        <div class="row g-5">

            <?php

            include_once './components/categorie-select.php';

            foreach ($articles as $article):

            ?>
                <div class="col-xl-3 col-lg-4">
                    <?php include './components/art-card.php' ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</main>


<?php include_once './components/footer.php' ?>