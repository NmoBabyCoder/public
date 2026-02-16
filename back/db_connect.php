<?php

function getDBConnexion()
{
    try {
        $dsn = 'mysql:host=localhost;port=3307;dbname=vite_et_gourmand';
        $user = 'root';
        $password = '';
        $pdo = new PDO($dsn, $user, $password);
        return $pdo;
    } catch (PDOException $e) {
        die("Erreur lors de la connexion à la BDD");
    }
}
