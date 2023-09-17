<?php

require_once 'ResponseModel.php';
require_once 'UserModel.php';

/**
 * Permet de créer un profil
 * @param $userProfileData array Tableau associatif contenant les informations du profile
 * @return ApiResponse
 */
function createProfile(array $userProfileData): ApiResponse
{
    // Récupération de la base de données
    $database = getConnection();

    $query = "INSERT INTO profil 
                    (pseudo, avatar, user_id)
              VALUES 
                    (:pseudo, :avatar, :user_id)";

    $stmt = $database->prepare($query);

    $stmt->bindParam(":pseudo", $userProfileData['pseudo']);
    $stmt->bindParam(":avatar", $userProfileData['avatar']);
    $stmt->bindParam(":user_id", $_SESSION['id'], PDO::PARAM_INT);

    $isDone = $stmt->execute();

    if ($isDone) {

        $database = null;
        $stmt = null;

        return response(true);
    } else {
        return response(false, null, "Erreur lors de la personnalisation du profil.");
    }
}

/**
 * Permet de mettre à jour un champ du contact en fonction du nom de la colonne fourni
 * @param $id int Identifiant du contact à modifier
 * @param $columnName string Le nom de la colonne à modifier
 * @param $newValue mixed La nouvelle valeur
 * @return ApiResponse
 */
function profilePatchField(int $id, string $columnName, mixed $newValue): ApiResponse
{

    $allowedColumns = ["lastname", "firstname", "pseudo", "phone_number", "email", "street_address", "number_address", "zip_address", "city_address", "filename", "filepath"];

    // Vérifier si le nom de colonne est autorisé
    if (!in_array($columnName, $allowedColumns)) {
        return response(false, null, "Nom de colonne non autorisé");
    }

    $query = "UPDATE contact SET $columnName = :newValue WHERE id = :id";
    $database = getConnection();

    $stmt = $database->prepare($query);
    $stmt->bindParam(":newValue", $newValue);
    $stmt->bindParam(":id", $id, PDO::PARAM_INT);

    $database->beginTransaction();

    try {
        $isDone = $stmt->execute();

        if ($isDone) {
            $database->commit();
            $database = null;
            $stmt = null;

            return response(true);
        } else {
            throw new Exception("Erreur lors de la mise à jour");
        }
    } catch (Exception $e) {
        $database->rollBack();
        $database = null;
        return response(false, null, $e->getMessage());
    }
}
