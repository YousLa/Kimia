<?php

// ^ Cette fonction est utile pour créer et retourner une réponse structurée, typiquement utilisée dans le traitement des requêtes HTTP GET & POST où nous allons indiquer le succès ou l'échec d'une opération, transmettre des données associées et éventuellement fournir un message d'erreur en cas d'échec.

// ! A ne pas oublier, il faudra faire un require_once à chaque appel des variables de la fonction response. C'est avec les variables qu'elle contient que nous allons vérifier si l'on reçoit bien les données de la requête, traiter les données reçus et renvoyer les erreurs s'il y en a.


/**
 * Structure d'une réponse retournée par la base de données
 */

//  Il s'agit de la déclaration de la classe ApiRespone. Cette classe est un modèle qui permet de structurer les réponses renvoyées par la base de données. Elle facilite la gestion des informations d'état, des données renvoyées et des messages d'erreur.
class ApiResponse
{
    /**
     * @var bool État d'une requête
     */
    public bool $success;

    /**
     * @var mixed Données retournées
     */
    public mixed $data;

    /**
     * @var string|null Message d'erreur
     */
    public ?string $error;
}

// * Les propriétés de notre response :
// ! Paramètres par défaut

// 1 - success - boolean - True ou False
// * Type bool - Il s'agit d'un booléen qui indique si la réponse à réussi ou non. Si $success est true, cela signifie que la réponse est un succès, sinon, c'est un échec.

// 2 - data - mixed - null
// * Type mixed, par défaut null - C'est une valeur qui peut être de n'importe quel type. Cette variable est destinée à contenir les données associées à la réponse. Si la réponse est une réussite, $data peut contenir les données pertinentes pour cette réponse.

// 3 - ?string - $error - null
// * Le ? devant le type string dans la déclaration du paramètre $error signifie que ce paramètre peut être nul en plus d'accepter des chains de caractères.
// * Type string nullable, par défaut null - Il s'agit d'une chaîne de caractères qui peut contenir un message d'erreur ou de description si la réponse est un échec. Si la réponse est un succès, cette variable est généralement laissé à null.

// * Selon les situations nous allons modifier les paramètres de base
// ! les changements doivent toujours se faire dans le même ordre <success - data - error>.

/**
 * @param $success bool Requête réussie ou non
 * @param $data mixed|null Données retournées
 * @param $error string|null Message d'erreur
 * @return ApiResponse Structure d'une réponse retournée par la base de données
 */

//  On crée la fonction response qui comme son nom l'indique va nous servir de réponse à la fin de chaque fois que l'on va devoir retournée une réponse de la base de données.
// Dans la déclaration de la fonction response, le ApiResponse après les paramètres de la fonction indique le type de valeur que la fonction renverra comme résultat lorsqu'elle sera appelée. Cela s'appelle l'annotation de type de retour.
function response(bool $success, mixed $data = null, ?string $error = null): ApiResponse
{
    // 1 - Création de l'objet ApiResponse en utilisant l'instruction new ApiResponse(). 
    // Cet objet est une instance d'une classe définie ailleurs dans le code. La variable $response est utilisée pour construire la réponse avant de la retourner.
    $response = new ApiResponse();

    // 2 - Affectation des valeur : les trois paramètres passés à la fonction sont assignés aux propriétés de l'objet $response. 
    // Cela signifie que $success est assigné à la propriété $response->success, $data à $response->data et $error à $response->error.
    // Cela configure les données de la réponse en fonction des paramètres passés à la fonction.
    $response->success = $success;
    $response->data = $data;
    $response->error = $error;

    // 3 - Retour de la réponse : L'objet $response, qui a maintenant été configuré avec les valeurs appropriées, est retourné comme résultat de la fonction.
    return $response;
}
