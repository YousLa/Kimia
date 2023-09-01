<!-- ######## Preview des contes -->

<?php

$message = "";

$id = "";
$title = "";
$synopsis = "";
$url = "";
$image = "";
$audio = "";

// TODO créer un url au lieu d'utiliser les noms des comtpes dans le get
if (isset($_GET['conte'])) {

    $title = $_GET['conte'];

    # Connexion à la base de données
    include_once "models/database.php";
    # Création de la requête
    $query = "SELECT * FROM conte WHERE title = :title";

    $objet = $database->prepare($query);

    $options = array(
        ":title" => $title
    );

    if ($objet->execute($options)) {

        $conte = $objet->fetchAll()[0];

        # Extraction des données d'un conte dans une variable
        list(
            $id, $title, $synopsis, $url, $image, $audio
        ) = $conte;
    } else {
        $message = 'Contes non trouvée';
    }
}

require_once 'views/contes/fiche.php';
