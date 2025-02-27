<?php include_once 'components/header.php' ?>

<?php
// require 'db/article-db.php';
// $articles = getArticles();
//     $uniqueArticle = getOneArticle($article_id);
// 
require 'db/category-db.php';
$articles = getArticlesWithCategory();
?>

<?php

$article_position = $_GET['id']; //prend les string comme name et ce n'importe où dans le dossier parce que c'est une variable globale
$uniqueArticle = $articles[$article_position];

?>

<main>
    <div>
        <img src='<?php echo $uniqueArticle['image'] ?>' alt='<?php $uniqueArticle['slug'] ?>'>
    </div>

    <h1><?php echo $uniqueArticle['title']; ?></h1>

    <ul>
        <li><?php echo $uniqueArticle['label']; ?></li>
        <li><?php echo $uniqueArticle['published_at']; ?></li>
    </ul>

    <p><?php echo $uniqueArticle['content']; ?></p>

    <ul>
        <li><?php echo $uniqueArticle['author']; ?></li>
    </ul>

    <div>
        <h2>Commentaires section</h2>
        <?php
        $article_id = $uniqueArticle['id'];
        require 'components/art-comment.php';
        ?>
    </div>
</main>

<?php include_once 'components/footer.php' ?>