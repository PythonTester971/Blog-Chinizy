<?php require_once 'db_connect_pdo.php';

function getCommentsOneArticle($article_id)
{

    global $pdo;

    $sql = 'SELECT *,comments.author AS comment_author, comments.published_at, comments.content, comments.id AS comment_id 
    FROM articles
    JOIN comments ON comments.article_id = articles.id
    WHERE articles.id = :article_id';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':article_id' => $article_id]);
    $commentsOneArticle = $stmt->fetchAll();

    return $commentsOneArticle;
}


function createComment($author, $message, $articleid)
{
    global $pdo;

    $sql = 'INSERT INTO comments(author, content, article_id)
    VALUES(:author,:content,:articleid)';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':author' => $author,
        ':content' => $message,
        ':articleid' => $articleid
    ]);
}
