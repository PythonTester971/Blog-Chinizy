<?php require_once 'db/db_connect_pdo.php';



function getArticlesWithCategory()
{

    global $pdo;

    $sql = 'SELECT *, categories.label, categories.color 
            FROM articles
            JOIN categories ON articles.category_id = categories.id';
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $articlesAndCategory = $stmt->fetchAll();

    return $articlesAndCategory;
}

function getArticleWithCategory($article_id)
{

    global $pdo;

    $sql = 'SELECT articles.id AS article_id, articles.title,articles.image, articles.slug, articles.category_id,articles.content,articles.author,categories.id AS category_id, categories.label 
            FROM articles
            JOIN categories ON articles.category_id = categories.id 
            WHERE id = :id';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':id' => $article_id]);
    $articleWithCategory = $stmt->fetch(); //fetch : position de l'article à partir index articles = 0;

    return $articleWithCategory;
}
