<!-- Fichier non visible du profil (controllers) dans lequel on note le code php nécessaire à son fonctionnement -->

<?php

# On inclut le fichier database.php qui regroupe les infos nécessaire à la connexion vers la base de données
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

# On fait appel au fichier profil visible (views). C'est ce fichier qui est affiché sur l'index.php grâce au router 
require_once 'views/user/account.php';
