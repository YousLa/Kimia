<!-- Paramètres de lecture - envoie par paquets -->
<?php

include "controllers/contes/VideoStream.php";

if (isset($_GET['conte'])) {

    $title = htmlspecialchars($_GET['conte']);

    # Connexion à la base de données
    include_once "models/database.php";
    # Création de la requête
    $query = "SELECT conte FROM conte WHERE title = :title";

    $options = array(
        ":title" => $title
    );

    $objet = $database->prepare($query);

    if ($objet->execute($options)) {

        $conte = $objet->fetchAll()[0];

        list(
            $stream_url
        ) = $conte;
    }
}

$filename = $url;
$direname = "assets/contes/";

$stream = new VideoStream($direname . $filename);
$stream->start();
exit;
?>