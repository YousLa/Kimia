<?php

# Connexion à la base de données
include_once "models/database.php";

# Création de la requête de récupération de tous les users
$query = "SELECT * FROM user";

# Extraction des données de la requête
$objet = $database->query($query);

# Transforme l'objet de requête en tableau
$users = $objet->fetchAll();

# Parcourir les personnes dans le tableau
foreach ($users as $user) {

    # Extraction des données d'une personne dans une variable
    list(
        $id, $last_name, $first_name, $birthdate, $email,, $role, $created_at, $updated_at
    ) = $user;
}


require_once 'views/session/profil.php';
