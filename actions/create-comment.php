<?php
require_once '../db/comment-db.php';


// SI le user a rempli mon formulaire
if (isset($_POST['author'], $_POST['message'], $_POST['article-id'])) {
    $author = $_POST['author'];
    $message = $_POST['message'];
    $articleid = $_POST['article-id'];


    createComment($author, $message, $articleid);

    header("Location: /article.php?id=$articleid");
    die();
}

header("Location: /archives.php");
die();
