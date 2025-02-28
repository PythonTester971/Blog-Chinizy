<?php // fonctions composées sur la base des informations extraites à partir de pdo.php 
require_once 'db/db_connect_pdo.php'
?>

<?php

// Requête préparée
// On écrit naivement son SQL
// $sql = "SELECT * FROM pokemon where id = :id OR height = :height";
// // ... que l'on donne à notre pdo
// $stmt = $pdo->prepare($sql);

// $stmt->execute([
//     ':id' => 5,
//     ':height' => 170
// ]);

function getArticles()
{

    global $pdo;

    $sql = 'SELECT * FROM articles';
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $articles = $stmt->fetchAll();

    return $articles;
}



function getOneArticle($article_id)
{

    global $pdo;


    $sql = 'SELECT * FROM articles WHERE id = :id';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':id' => $article_id]);
    $uniqueArticle = $stmt->fetch(); //fetch : position de l'article à partir index articles = 0;

    return $uniqueArticle;
}


function getArticleWithCategory($article_id)
{

    global $pdo;
    $sql = 'SELECT articles.*, categories.label, categories.color 
    FROM articles
    JOIN categories ON articles.category_id = categories.id
    WHERE articles.id = :article_id';

    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':article_id' => $article_id,
    ]);
    $articleWithCategory = $stmt->fetch(); //fetch : position de l'article à partir index articles = 0;

    return $articleWithCategory;
}

function getArticlesWithCategory()
{

    global $pdo;

    $sql = 'SELECT articles.*, categories.label, categories.color 
            FROM articles
            JOIN categories ON articles.category_id = categories.id';
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $articlesAndCategory = $stmt->fetchAll();

    return $articlesAndCategory;
}
