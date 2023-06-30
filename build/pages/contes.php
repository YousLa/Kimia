<?php session_start();
include_once "./template/connectDB.php";


$fiche = "";
?>
<!-- HOME PAGE WHEN LOGGED IN -->
<!-- ################## Listing des contes -->
<!-- Le but de cette paage est de simplement afficher les différents contes disponible  -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contes</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>



    <h1>Contes</h1>
    <!-- Création de la requête de récupération de tous les users -->
    <?php $query = "SELECT title, image FROM stream";

    // Extraction des données de la requête
    $objet = $database->query($query);

    // Transforme l'objet d ela requête en tableau
    $contes = $objet->fetchAll(PDO::FETCH_ASSOC);

    // Parcourir les contes dans le tableau
    foreach ($contes as $cle => $conte) {

        // Extraction des données d'un conte dans une variable

        $fiche .= "<li class='contes'>";

        $fiche .= "<h2><a href='./pages/fiche.php?conte=" . htmlspecialchars($conte['title']) . "'>" . $conte['title'] . "</a></h2>";

        // TODO 

        $fiche .= "<img src='./assets/contes/" . $conte['image'] . "'>";

        $fiche .= "</li>";
    }
    ?>

    <ul class="container">

        <?= $fiche; ?>

    </ul>

</body>

</html>