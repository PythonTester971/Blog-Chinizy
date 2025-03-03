<?php require_once 'db_connect_pdo.php';
require_once '../actions/create-user.php';


function createUser($username, $email, $password)
{

    global $pdo;

    $sql = 'INSERT INTO users(username,email,`password`)
VALUES(:username,:email,:passwort)';
    $stmt = $pdo->prepare($sql);
    $createdUser = $stmt->execute([
        ':username' => $username,
        ':email' => $email,
        ':passwort' => $password
    ]);

    return $createdUser;
}
