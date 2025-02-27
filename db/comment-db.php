<?php require_once 'db_connect_pdo.php';

function getCommentsOneArticle($article_id)
{

    global $pdo;

    $sql = 'SELECT comments.author AS comment_author, comments.published_at, comments.content, comments.id AS comment_id, comments.article_id AS comment_art_id, articles.id AS article_id, articles.author AS article_author
    FROM comments
    JOIN articles ON comments.article_id = articles.id
    WHERE articles.id = :article_id';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':article_id' => $article_id]);
    $commentsOneArticle = $stmt->fetchAll();

    return $commentsOneArticle;
}
