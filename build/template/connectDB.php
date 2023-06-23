<?php

# Information de connexion à la base de données

// DSN Data Source Name 

$server = "mysql";
$host = "localhost";
$dbname = "projet1";
$charset = "utf8";

$dsn = "$server:host=$host;dbname=$dbname;charset=$charset";
$username = "root";
$password = "";

try {
    // Connexion à la base de données
    $database = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    // Erreur de connexion
    echo $e->getMessage();
}
