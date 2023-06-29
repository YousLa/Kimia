<!-- ######## Preview des contes -->

<?php

$id = "";
$title = "";
$synopsis = "";
$stream_url = "";
$image = "";
$audio = "";

// TODO créer un url au lieu d'utiliser les noms des comtpes dans le get
if (isset($_GET['conte'])) {

    $title = $_GET['conte'];

    # Connexion à la base de données
    include_once "../template/connectDB.php";
    # Création de la requête
    $query = "SELECT * FROM stream WHERE title = :title";

    $options = array(
        ":title" => $title
    );

    $objet = $database->prepare($query);

    if ($objet->execute($options)) {

        $conte = $objet->fetchAll()[0];

        # Extraction des données d'unconte dans une variable
        list(
            $id, $title, $synopsis, $stream_url, $image, $audio
        ) = $conte;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contes</title>
</head>

<body>

    <h1><?= $title ?></h1>

    <audio controls>
        <source src="./assets/contes/<?= $audio ?>" type="audio/mp3">
    </audio>

    <p><?= $synopsis ?></p>

    <a href="../libraries/video.php?conte=<?= $title ?>">Visionner le contes</a>


</body>

</html>