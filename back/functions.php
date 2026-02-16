<?php
require_once '../back/db_connect.php';


function createUser($email, $password)
{

    $pdo = getDBConnexion();

    $password_hashed = password_hash($password, PASSWORD_DEFAULT);

    $statement = $pdo->prepare('INSERT INTO users (email, password) VALUES (:email, :password)');

    $success = $statement->execute([
        'email' => $email,
        'password' => $password_hashed
    ]);

    if ($success) {
        echo 'ok';
    } else {
        echo 'non';
    }
}

function getUserByEmail($email)
{
    $pdo = getDBConnexion();

    $sql = 'SELECT * FROM users WHERE email = :email ;';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        'email' => $email
    ]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}
