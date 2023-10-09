<?php

// ^ Cette page regroupe les fonctions utiles à la session utilisateur lors de la création, la connexion et de la modification des informations d'un compte utilisateur.


// On fait appelle aux pages :

// ~ ResponseModel.php qui va nous servir pour paramètrer les réponses de la base de données selon les situations avec la fonction response().
// ~ Database.php qui va nous servir à faire appel à la fonction getConnection().
require_once 'models/functions/ResponseModel.php';
require_once 'models/database/database.php';


/*
^ Fonctionnalités liées aux contes
*/

// ! ================== AFFICHER LES CATEGORIES ==================

/**
 * Permet de récupérer la liste des catégories sous forme d'un tableau reprenant toutes les colonnes de la base de données
 * @return ApiResponse
 */
function getCategory(): ApiResponse
{
    $query = "
        SELECT
	        *
        FROM
    	    category
            ";


    // Ouverture du flux
    $database = getConnection();

    $stmt = $database->prepare($query);
    $stmt->fetchAll(PDO::FETCH_ASSOC);
    $isDone = $stmt->execute();

    // Nettoyage du flux
    $database = null;

    if ($isDone) {
        $categories = $stmt;
        return response(true, $categories);
    } else {
        return response(false, null, "Erreur lors de la récupération des contes");
    }
}

// ! ================== AFFICHER LES CONTES ==================

/**
 * Permet de récupérer la liste des conttes sous forme d'un tableau reprenant toutes les colonnes de la base de données
 * @param int $categoryID Prends en paramètre l'id de la catégorie pour laquelle on recherche les contes
 * @return ApiResponse
 */
function getContes($categoryID): ApiResponse
{
    // LEFT JOIN si conte sans catégorie
    $query = "
        SELECT
	        *
        FROM
    	    conte
        JOIN
    	    conte_category 
        ON 	
            conte.id = conte_category.conte_id
         JOIN
    	    category 
        ON 	
            conte_category.category_id = category.id
        WHERE
            category.id = :categoryID  
        ";

    // Ouverture du flux
    $database = getConnection();

    $stmt = $database->prepare($query);
    $stmt->bindParam(":categoryID", $categoryID, PDO::PARAM_STR);
    $stmt->fetchAll(PDO::FETCH_ASSOC);
    $isDone = $stmt->execute();

    // Nettoyage du flux
    $database = null;

    if ($isDone) {
        $contes = $stmt;
        return response(true, $contes);
    } else {
        return response(false, null, "Erreur lors de la récupération des contes");
    }
}

// ! ================== AFFICHER LES CONTES SELON LE NIVEAU D'IMPORTANCE ==================

/**
 * Permet de récupérer la liste des conttes sous forme d'un tableau reprenant toutes les colonnes de la base de données
 * @param int $categoryID Prends en paramètre l'id de la catégorie pour laquelle on recherche les contes
 * @return ApiResponse
 */
function getContesTendances(): ApiResponse
{
    // On cherche les contes qui ont une importance de 1
    $query = "
        SELECT
	        *
        FROM
    	    conte
        JOIN
    	    conte_category 
        ON 	
            conte.id = conte_category.conte_id
         JOIN
    	    category 
        ON 	
            conte_category.category_id = category.id
        WHERE
            importance = 1
        ";

    // Ouverture du flux
    $database = getConnection();

    $stmt = $database->prepare($query);
    $stmt->fetchAll(PDO::FETCH_ASSOC);
    $isDone = $stmt->execute();

    // Nettoyage du flux
    $database = null;

    if ($isDone) {
        $tendances = $stmt;
        return response(true, $tendances);
    } else {
        return response(false, null, "Erreur lors de la récupération des contes");
    }
}


// ! ================== AFFICHER LA FICHE DU CONTE SELECTIONEE ==================

/**
 * Permet de récupérer le conte selectionné de par son titre sous forme d'un tableau reprenant toutes les colonnes de la base de données
 * @return ApiResponse
 */
function getConteById(): ApiResponse
{
    $title = $_GET['conte'];

    $query = "
        SELECT
             * 
        FROM 
            conte 
        WHERE 
            title = :title
    ";

    // Ouverture du flux
    $database = getConnection();
    $stmt = $database->prepare($query);
    $stmt->bindParam(":title", $title, PDO::PARAM_STR);
    $isDone = $stmt->execute();

    // Netotyage du flux
    $database = null;

    if ($isDone) {

        $conte = $stmt->fetchAll()[0];
        return response(true, $conte);
    } else {
        return response(false, null, "Erreur lors de la récupération du conte");
    }
}

// ! ================== LECTURE DU CONTE SELECTIONEE ==================

/**
 * Permet de lancer la lecture du conte selectionné de par son titre 
 * @return ApiResponse
 */
function getConteUrl(): ApiResponse
{
    include "controllers/contes/VideoStream.php";

    if (isset($_GET['conte'])) {

        $title = htmlspecialchars(($_GET['conte']));

        $query = "
            SELECT
                url
            FROM
                conte
            WHERE
                title = :title";

        // Ouverture du flux
        $database = getConnection();
        $stmt = $database->prepare($query);
        $stmt->bindParam(":title", $title, PDO::PARAM_STR);
        $isDone = $stmt->execute();

        // Nettoyage du flux
        $database = null;

        if ($isDone) {
            $conte = $stmt->fetchAll()[0];
            return response(true, $conte);
        } else {
            return response(false, null, "Erreur lors de la récupération du conte");
        }
    }
}
