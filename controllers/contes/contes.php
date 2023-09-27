<?php

$fiche = "";

$error = false;
$error_message = "";


require_once 'models/database/database.php';
$database = getConnection();

$query = "SELECT
	*
FROM
    	conte
JOIN
    	conte_category 
ON 	conte.id = conte_category.conte_id
JOIN
    	category 
ON 	conte_category.category_id = category.id";

// Extraction des données de la requête
$objet = $database->query($query);

// Transforme l'objet de la requête en tableau
$contes = $objet->fetchAll(PDO::FETCH_ASSOC);

// Parcourir les contes dans le tableau
foreach ($contes as $cle => $conte) {

    // Extraction des données d'un conte dans une variable

    $fiche .= "<li class='contes'>";

    $fiche .= "<h2><a href='?page=fiche&conte=" . htmlspecialchars($conte['title']) . "'>" . $conte['title'] . "</a></h2>";

    // TODO 

    $fiche .= "<img src='./assets/contes/" . $conte['image'] . "'>";

    $fiche .= "</li>";
}


require_once 'views/contes/contes.php';
