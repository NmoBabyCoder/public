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

function getAllMenus()
{

    $pdo = getDBConnexion();

    $sql = 'SELECT * FROM menus;';
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    $result = $stmt->fetchAll();

    $menus = [];

    foreach ($result as $row) {
        if (isset($menus[$row['idmenu']]) == false) {

            $menu = [
                'title' => $row['title'],
                'description' => $row['description'],
                'image' => $row['image'],
                'price' => $row['price']
            ];

            $menus[$row['idmenu']] = $menu;
        }
    }

    return $menus;
}

function showMenuInfo($data, $name)
{
    echo htmlspecialchars($data[$name], ENT_QUOTES, 'UTF-8') . "\t";
}
