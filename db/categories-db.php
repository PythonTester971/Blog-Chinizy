<?php require 'db_connect_pdo.php';



function getCategoryNames()
{

    global $pdo;

    $sql = 'SELECT categories.label,categories.id FROM categories';
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $categories = $stmt->fetchAll();

    return $categories;
}
