<?php // fonctions composées sur la base des informations extraites à partir de pdo.php 
require_once 'db_connect_pdo.php'
?>

<?php

// Récupération de tous les articles
function getArticles()
{

    global $pdo;

    $sql = 'SELECT * FROM articles';
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $articles = $stmt->fetchAll();

    return $articles;
}


//Récupération des infos d'un article particulier
function getOneArticle($article_id)
{

    global $pdo;


    $sql = 'SELECT * FROM articles WHERE id = :id';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':id' => $article_id]);
    $uniqueArticle = $stmt->fetch(); //fetch : position de l'article à partir index articles = 0;

    return $uniqueArticle;
}



//Récupération des articles AVEC l'information du nom de la catégorie
function getArticlesWithCategory()
{

    global $pdo;

    $sql = 'SELECT articles.*, categories.label, categories.color 
            FROM articles
            JOIN categories ON articles.category_id = categories.id
            ORDER BY articles.published_at DESC';
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $articlesAndCategory = $stmt->fetchAll();

    return $articlesAndCategory;
}


//Récupération des infos d'un article particulier AVEC l'information du nom de la catégorie
function getArticleWithCategory($article_id)
{

    global $pdo;
    $sql = 'SELECT articles.*, categories.label, categories.color 
    FROM articles
    JOIN categories ON articles.category_id = categories.id
    WHERE articles.id = :article_id';

    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':article_id' => $article_id
    ]);
    $articleWithCategory = $stmt->fetch(); //fetch : position de l'article à partir index articles = 0;

    return $articleWithCategory;
}


function getArticlesByCategory($category_id)
{

    global $pdo;

    $sql = 'SELECT articles.*, categories.label, categories.color 
            FROM articles
            JOIN categories ON articles.category_id = categories.id
            WHERE category_id = :category_id';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':category_id' => $category_id
    ]);
    $articlesByCategory = $stmt->fetchAll();

    return $articlesByCategory;
}



//Rédiger et créer un article envoi en base de données
function createArticle($article_title, $article_author, $article_content, $article_category)
{

    global $pdo;

    $sql = 'INSERT INTO articles(title,author,content,published_at,category_id)
VALUES(:article_title,:article_author,:article_content,CURRENT_TIMESTAMP,:article_category)';
    $stmt = $pdo->prepare($sql);
    $createdArticle = $stmt->execute([
        ':article_title' => $article_title,
        ':article_author' => $article_author,
        ':article_content' => $article_content,
        ':article_category' => $article_category
    ]);

    return $createdArticle;
}
