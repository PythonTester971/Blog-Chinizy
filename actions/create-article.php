<?php


require '../db/article-db.php';


if (isset($_POST['write-title'], $_POST['write-author'], $_POST['write-content'], $_POST['choose-category'])) {
    $article_title = $_POST['write-title'];
    $article_author = $_POST['write-author'];
    $article_content = $_POST['write-content'];
    $article_category = $_POST['choose-category'];

    createArticle($article_title, $article_author, $article_content, $article_category);

    header("Location: /article-creation.php");
    die();
}

header("Location: /article-creation.php");
die();
