<?php

function getDBConnexion()
{
    try {
        $dsn = 'mysql:host=mysql-babycoder.alwaysdata.net;dbname=babycoder_vite_et_gourmand';
        $user = 'babycoder';
        $password = 'Mmdpadg1go/m';
        $pdo = new PDO($dsn, $user, $password);
        return $pdo;
    } catch (PDOException $e) {
        die("Erreur lors de la connexion à la BDD");
    }
}
