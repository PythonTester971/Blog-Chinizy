<?php

require_once '../db/user-db.php';
//informations qui passeront en paramètres de ma requêtes SQL

if (isset($_POST['username'], $_POST['email'], $_POST['password'])) {

    $username = $_POST['username'];

    $email = $_POST['email'];

    $password = $_POST['password'];

    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

    $createdUser = createUser($username, $email, $passwordHash);

    header("Location: /user-creation.php");
    die();
}
