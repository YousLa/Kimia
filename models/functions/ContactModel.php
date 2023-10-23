<?php

// ^ Cette page regroupe les fonctions utiles à la session utilisateur lors de la création, la connexion et de la modification des informations d'un compte utilisateur.


// On fait appelle aux pages :

// ~ ResponseModel.php qui va nous servir pour paramètrer les réponses de la base de données selon les situations avec la fonction response().
// ~ Database.php qui va nous servir à faire appel à la fonction getConnection().
require_once 'models/functions/ResponseModel.php';
require_once 'models/database/database.php';

/*
^ Fonctionnalités liées au formulaire de contact
*/

// Dans la déclaration de la fonction sendMessage, le ApiResponse indique le type de valeur que la fonction renverra comme résultat lorsqu'elle sera appelée. Cela s'appelle l'annotation de type de retour.

/**
 * @param $contactDataData array Tableau associatif contenant les informations renseigné dans le formulaire de contact
 * @return ApiResponse
 */
function sendMessage(array $contactData): ApiResponse
{
    // Récupération de la base de données
    $database = getConnection();

    $query = "INSERT INTO contact 
                    (email, sujet, message)
              VALUES 
                    (:email, :sujet, :message)";

    $stmt = $database->prepare($query);

    $stmt->bindParam(":email", $contactData['email']);
    $stmt->bindParam(":sujet", $contactData['sujet']);
    $stmt->bindParam(":message", $contactData['message']);

    $isDone = $stmt->execute();

    if ($isDone) {

        $database = null;
        $stmt = null;

        return response(true);
    } else {
        return response(false, null, "Erreur lors de l'envoie du formulaire'.");
    }
}
