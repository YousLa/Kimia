<?php

// ! Ne pas oublier - changer le nom de la base de données

// Connexion à une base de données

// 1. data source name dsn - SQL
// 2. Hôte - localhost
// 3. Nom de la base de données
// 4.Charset - UTF8

$server = "mysql";
$host = "localhost";
$dbname = "kimiaproject";
$charset = "utf8";

$dsn = "$server:host=$host;dbname=$dbname;charset=$charset";
$username = "root";
$pwd = "";

try {
    // Connexion à la base de données
    $database = new PDO($dsn, $username, $pwd);
} catch (PDOException $e) {
    // Erreur de connexion
    echo $e->getMessage();
}
