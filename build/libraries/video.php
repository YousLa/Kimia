<!-- Paramètres de lecture - envoie par paquets -->
<?php

include "./VideoStream.php";

if (isset($_GET['conte'])) {

    $title = $_GET['conte'];

    # Connexion à la base de données
    include_once "../template/connectDB.php";
    # Création de la requête
    $query = "SELECT stream_url FROM stream WHERE title = :title";

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

$filename = $stream_url;
$direname = "../assets/contes/";

$stream = new VideoStream($direname . $filename);
$stream->start();
exit;
?>