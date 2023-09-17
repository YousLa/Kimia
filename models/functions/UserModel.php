<?php

// ^ Cette page regroupe les fonctions utiles à la session utilisateur lors de la création, la connexion et de la modification des informations d'un compte utilisateur.


// On fait appelle aux pages :

// ~ ResponseModel.php qui va nous servir pour paramètrer les réponses de la base de données selon les situations avec la fonction response().
// ~ Database.php qui va nous servir à faire appel à la fonction getConnection().
require_once 'models/functions/ResponseModel.php';
require_once 'models/database/database.php';

/*
^ Fonctionnalités liées aux utilisateurs
*/

#region signIn() - Se connecter


/**
 * Se connecter en tant qu'utilisateur
 *
 * @param array $credentials Tableau associatif contenant les informations de connexion.
 * Exemple ['email' => 'utilisateur@example.com', 'password' => 'motdepasse ]
 *
 * @return ApiResponse
 */

// Comme paramètres de fonction $credentials un tableau associatif contenantt les informations de connexion.

// * On crée la fonction signIn qui comme son nom l'indique va nous servir au moment de la connexion de l'utilisateur.

// Dans la déclaration de la fonction signIn, le ApiResponse après les paramètres de la fonction indique le type de valeur que la fonction renverra comme résultat lorsqu'elle sera appelée. Cela s'appelle l'annotation de type de retour.
function signIn(array $credentials): ApiResponse
{
    // On initialise les variables $email et $password qui contienne respectivement un élément du tablau associatif $credentials.
    $email = $credentials['email'];
    $password = $credentials['password'];

    // * Si un ou plusieurs champs est/sont vide(s).
    if (empty($email) || empty($password)) {
        // La fonction renvoie un response($success = false, $data = null, $error = "Veuillez complèter tous les champs").
        return response(false, null, "Veuillez complèter tous les champs");
    }


    try {
        // Appelle de la fonction getConnection() qui va tenter de se connecter à la base de données
        $database = getConnection();

        // ~ Requête préparée

        // Requête qui va nous servir lors de l'étape 1
        // On demande à la base de données de selectionner toutes les valeurs de la table user où se trouve les valeurs de l'email et du password que l'on va récuperer grâce au formulaire de connexion
        $query = "SELECT * FROM user WHERE email = :email AND password = sha2(:password, 256)";

        // Etape 1 - Préparation d'une requête SQL
        // En l'occurance notre requête SQL est stocké dans la variable $query que l'on à initialisé au préalable.
        $stmt = $database->prepare($query);

        // Etape 2 - Liaison des valeurs avec des marqueurs nommées
        // En l'occurence les marqueurs nommées son :email et :password.
        // bindParam - Lie un paramètre à un nom de variable spécifique (ici la variable $stmt).
        // La variable $stmt est liée en tant que référence et ne sera évaluée qu'a l'étape suivante.
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":password", $password);

        // A ce stade le template de requête est envoyé au serveur de la base de données. Le serveur à effectué une vérification de la syntaxe et initialise les ressources internes du serveur pour une utilisation ultérieure.
        // Maintenant que tout est près nous pouvons entamer la dernière étape.

        // Etape 3 - Exécution
        // Le serveur exécute la requête préparée en passant les valeurs spécifiées ($email et $password) aux paramètres de la requête.
        // * Si l'éxecution de la requête réussi alors les instructions ($stmt->execute() est true) alors
        if ($stmt->execute()) {
            // La méthode fetch(PDO::FETCH_ASSOC) permet d'organiser les données renvoyées en un tableau associatif.
            // Ici les données renvoyées sont l'email et le password
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            // * Si user renvoie true cela signifie que l'email et le password sont correctes
            if ($user) {
                // La fonction renvoie un response($success = true, $data = $user).
                return response(true, $user);

                // * Sinon
            } else {
                // La fonction renvoie un response($success = false, $data = null, $error = "Email et/ou mot de passe incorrect").
                return response(false, null, "Email et/ou mot de passe incorrect.");
            }
            // * Si l'éxecution de la requête est un échec
        } else {
            // La fonction renvoie un response($success = false, $data = null, $error = "Erreur lors de la tentative de connexion)
            return response(false, null, "Erreur lors de la tentative de connexion");
        }
    } catch (PDOException $e) {
        // La fonction renvoie un response($success = false, $data = null, $error = "Erreur :" . $e->getMessage())
        return response(false, null, "Erreur : " . $e->getMessage());
    }
}

// ^ En résumé, la fonction signIn prend en charge l'authentification des utilisateurs en vérifiant leurs informations de connexion par rapport à une base de données, et elle renvoie des réponses structurées pour indiquer le résultat de l'opération. Elle est conçue pour être utilisée dans le processus d'authentification.

#endregion

#region signUp() - S'inscrire

/**
 * Création d'un utilisateur
 *
 * @param array $userData Tableau associatif reprenant les informations d'inscription
 *
 * @return ApiResponse
 */

// Comme paramètres de fonction $userData un tableau associatif contenantt les informations d'inscription

//  * On crée la fonction signUp qui comme son nom l'indique va nous servir au moment de la création du compte utilisateur.

// Dans la déclaration de la fonction signUp, le ApiResponse après les paramètres de la fonction indique le type de valeur que la fonction renverra comme résultat lorsqu'elle sera appelée. Cela s'appelle l'annotation de type de retour.
function signUp(array $userData): ApiResponse
{

    // ~ Requête préparée

    // Requête qui va nous servir lors de l'étape 1
    // On demande à la base de données d'insèrer dans la table user, au colonne spécifiée, les valeurs que l'on va récuperer grâce au formulaire d'inscription.
    $query = "INSERT INTO user (email, password) VALUES (:email, sha2(:password, 256))";

    // Appelle de la fonction getConnection() qui va tenter de se connecter à la base de données
    $database = getConnection();

    // Etape 1 - Préparation d'une requête SQL
    // En l'occurance notre requête SQL est stocké dans la variable $query que l'on à initialisé au préalable.
    $stmt = $database->prepare($query);

    // Etape 2 - Liaison des valeurs avec des marqueurs nommées
    // En l'occurence les marqueurs nommées son :email et :password.
    // bindParam - Lie un paramètre à un nom de variable spécifique (ici la variable $stmt).
    // La variable $stmt est liée en tant que référence et ne sera évaluée qu'a l'étape suivante.
    $stmt->bindParam(":email", $userData["email"]);
    $stmt->bindParam(":password", $userData["password"]);


    // Etape 3 - Exécution
    // Le serveur exécute la requête préparée en passant les valeurs spécifiées ($userData["email"] et $userData["password"]) aux paramètres de la requête.
    try {
        // * Si l'éxecution de la requête réussi alors les instructions ($stmt->execute() est true) alors
        if ($stmt->execute()) {

            // La fonction renvoie un response($success = true).
            return response(true);
        }
    } catch (\PDOException $e) {

        // Permet de passer en revue les différents codes d'erreur et d'attribuer au cas par cas un message personnalisé
        // getCode() qui va renvoyer le code d'erreur défini lors du lancement de l'exception
        switch ($e->getCode()) {

                // Lors de la création de la base de données nous avons spécifié que l'email devait être unique (ADD UNIQUE KEY `UK_email` (`email`);).
                // De ce fait si l'email à l'inscription est déjà présent dans la base de données. le code d'erreur 23000 se déclenche. Cela signifie qu'il y a un duplicata.
            case "23000":

                // La fonction renvoie un response($success = true, $data = null, $error = "L'adresse email que vous venez d'insérez existe déjà.").
                return response(false, null, "L'adresse email que vous venez d'insérez existe déjà.");

            default:
                // La fonction renvoie un response($success = false, $data = null, $error = getMessage()).
                // On utilise la fonction getMessage() pour retourner le message de l'exception, sous la forme d'une chaîne de caractères.
                return response(false, null, $e->getMessage());
        }
    }

    // La fonction renvoie un response($success = false, $data = null, $error = "Une erreur s'est produite lors de la création d'un compte utilisateur").
    // Si un return response() se lance avant d'arriver à ce niveau du code, alors on ne lancera pas celui-ci
    return response(false, null, "Une erreur s'est produite lors de la création d'un compte utilisateur");
}

// ^ En résumé, la fonction signUp prend en charge la création d'un utilisateur en utilisant des informations fournies, gère les erreurs potentielles liées à l'insertion dans la base de données, et renvoie des réponses structurées pour indiquer le résultat de l'opération.


#endregion

#region userPatchField() - Modifier un compte

/**
 * Permet de mettre à jour un champ du user en fonction du nom de la colonne fourni
 * @param $id int Index de l'utilisateur à modifier
 * @param $columnName string Le nom de la colonne à modifier
 * @param $newValue mixed La nouvelle valeur
 * @return ApiResponse
 */

// Comme paramètres de fonction : $id - int - l'index de l'utilisateur, $columnName - string - Le nom de la colonne de la table de la base de données que l'on souhaite mettre à jour et $newValue- mixed - La nouvelle valeur que l'on souhaite attribuer à la colonne spécifiée.

// * On crée la fonction userPAtchField qui comme son nom l'indique va nous servir au moment de la modification des informations de l'utilisateur.

// Dans la déclaration de la fonction userPatchField, le ApiResponse après les paramètres de la fonction indique le type de valeur que la fonction renverra comme résultat lorsqu'elle sera appelée. Cela s'appelle l'annotation de type de retour.
function userPatchField(int $id, string $columnName, mixed $newValue): ApiResponse
{

    // Vérification de la colonne autorisée : La fonction commencer par vérifier si le nom de la colonne spécifiée dans $columnName est autorisé en comparant avec un tableau $allowedColumns contenant les noms de colonnes autorisées.
    $allowedColumns = ["last_name", "first_name", "birthdate", "phone_number", "email"];

    // * Si le nom de la colonne n'est pas autorisé
    if (!in_array($columnName, $allowedColumns)) {
        // La fonction renvoie un response($success = false, $data = null, $error = "Nom de la colonne non autorisé").
        return response(false, null, "Nom de colonne non autorisé");
    }

    // Requête qui va nous servir lors de l'étape 1
    // On demande à la base de données de Modififer les valeurs présente dans table user, au colonne spécifiée, avec les données que l'on va récuperer grâce au formulaire de modification.
    $query = "UPDATE user SET $columnName = :newValue WHERE id = :id";

    // Appelle de la fonction getConnection() qui va tenter de se connecter à la base de données
    $database = getConnection();

    // Etape 1 - Préparation d'une requête SQL
    // En l'occurance notre requête SQL est stocké dans la variable $query que l'on à initialisé au préalable.
    $stmt = $database->prepare($query);

    // Etape 2 - Liaison des valeurs avec des marqueurs nommées
    // En l'occurence les marqueurs nommées son :newValue et :id.
    // bindParam - Lie un paramètre à un nom de variable spécifique (ici la variable $stmt).
    // La variable $stmt est liée en tant que référence et ne sera évaluée qu'a l'étape suivante.
    $stmt->bindParam(":newValue", $newValue);
    $stmt->bindParam(":id", $id, PDO::PARAM_INT);

    // Etape 3 - Début de la transition : La fonction commence une transaction avec la base de données. Cela signifie que outes les opérations de base de données à partir de ce point seront traitées comme une seule unité et elles seront validées en bloc ou annulées en bloc si une erreur se produit.
    $database->beginTransaction();

    // Etape 4 - Exécution
    // Le serveur exécute la requête préparée en passant les valeurs spécifiées ($newValue et $id) aux paramètres de la requête.
    try {
        $isDone = $stmt->execute();
        // * Si l'éxecution de la requête réussi alors les instructions ($isDone est true) alors
        if ($isDone) {
            // La transaction est validée en utilisant $database->commit().
            $database->commit();

            // La connexion à la base de donnée est coupé
            $database = null;

            // L'instruction préparée est nettoyé
            $stmt = null;

            // La fonction renvoie un response($success = true).
            return response(true);
        } else {
            throw new Exception("Erreur lors de la mise à jour");
        }
    } catch (Exception $e) {

        // Si une erreur survient pendant l'exécution de la requête, la transaction est annulée en utilisant $database->rollBack
        $database->rollBack();

        // La connexion à la base de données est fermée
        $database = null;

        // La fonction renvoie un response($success = false, $data = null, $error = $e->getMessage()).
        return response(false, null, $e->getMessage());
    }
}

// ^ En résumé, cette fonction permet de mettre à jour un champ spécifique d'un compte utilisateur dans la base de données en fonction du nom de la colonne fourni. Elle effectue des vérifications de sécurité pour s'assurer que le nom de la colonne est autorisé, utilise des requêtes préparées pour éviter les injections SQL, et gère les transactions pour garantir la cohérence des données.

#endregion

#region getUserByIndex - Récuperer les valeurs user et profil d'un utilisateur grâce à son index

/**
 * Permet de récupérer un utilisateur et son profil sur base de son index
 * @param int $id Index de l'utilisateur
 * @return ApiResponse
 */

// Comme paramètre de fonction : $id - int - l'index de l'utilisateur.

// * On crée la fonction getUserByIndex qui comme son nom l'indique va nous servir a récupérer un utilisateur en fonction de son index.

// Dans la déclaration de la fonction getUserByIndex, le ApiResponse après les paramètres de la fonction indique le type de valeur que la fonction renverra comme résultat lorsqu'elle sera appelée. Cela s'appelle l'annotation de type de retour.
function getUserByIndex(int $id): ApiResponse
{

    // Requête qui va nous servir lors de l'étape 1
    // On demande à la base de données de sélectionner toutes les valeurs présente dans la table user et de joindre celle de la table profil (en fonction de la relation entre elles, ici l'id de T user et le user_id de la T profil ) où se trouve la valeur de la variable $_SESSION['id'].
    $query = "SELECT * FROM user JOIN profil ON profil.user_id = user.id WHERE user.id = :id";

    // Appelle de la fonction getConnection() qui va tenter de se connecter à la base de données
    $database = getConnection();

    // Etape 1 - Préparation d'une requête SQL
    // En l'occurance notre requête SQL est stocké dans la variable $query que l'on à initialisé au préalable.
    $stmt = $database->prepare($query);

    // Etape 2 - Liaison des valeurs avec des marqueurs nommées
    // En l'occurence les marqueurs nommées son :email et :password.
    // bindParam - Lie un paramètre à un nom de variable spécifique (ici la variable $stmt).
    // La variable $stmt est liée en tant que référence et ne sera évaluée qu'a l'étape suivante.
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);

    // Etape 3 - Exécution
    // Le serveur exécute la requête préparée en passant les valeurs spécifiées ($id, PDO::PARAM_INT) aux paramètres de la requête et stocke le résultat dans la variable $isDone.
    $isDone = $stmt->execute();

    // La connexion à la base de donnée est coupé
    $database = null;

    // * Si l'éxecution de la requête réussi alors les instructions ($isDone est true) alors
    if ($isDone) {
        // On récupère les données de l'utilisateur à l'aide de $stmt->fetch(PDO::FETCH_ASSOC), qui renvoie un tableau associatif contenant les informations de l'utilisateur.
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        // La fonction renvoie un response($success = true, $data = $user).
        return response(true, $user);
    } else {

        // La fonction renvoie un response($success = false, $data = null, $error = "Erreur lors de la récupération des données de l'utilisateur").
        return response(false, null, "Erreur lors de la récupération des données de l'utilisateur");
    }
}

// ^ En résumé, cette fonction permet de récupérer les informations d'un utilisateur à partir de la base de données en utilisant son index. Elle renvoie des réponses structurées indiquant si la récupération a réussi ou échoué, ainsi que les données de l'utilisateur si elles sont disponibles.

// ! Ici on récupère TOUTES LES INFORMATIONS UTILISATEURS MEME SON PROFIL que l'on possède dans la base de données en fonction de son index.

#endregion

#region deleteUser - Supprimer un compte

/**
 * Permet de récupérer un utilisateur sur base de son index
 * @param $id int Index de l'utilisateur
 * @return ApiResponse
 */

// Comme paramètre de fonction : $id - int - l'index de l'utilisateur.

// * On crée la fonction deleteUser qui comme son nom l'indique va nous servir a supprimer un utilisateur en fonction de son index.

// Dans la déclaration de la fonction deleteUser, le ApiResponse après les paramètres de la fonction indique le type de valeur que la fonction renverra comme résultat lorsqu'elle sera appelée. Cela s'appelle l'annotation de type de retour.
function deleteUser(int $id): ApiResponse
{
    // ! =======> LANCEMENT DE LA TRANSACTION <======= ! //
    // Appelle de la fonction getConnection() qui va tenter de se connecter à la base de données
    $database = getConnection();

    // Début de la transition : La fonction commence une transaction avec la base de données. Cela signifie que outes les opérations de base de données à partir de ce point seront traitées comme une seule unité et elles seront validées en bloc ou annulées en bloc si une erreur se produit.
    $database->beginTransaction();

    try {

        // ! =======> VERIFICATION DES INFORMATIONS <======= ! //

        // On appelle la fonction getUserByIndex($id) pour récupérer les informations de l'utilisateur en fonction de son index. La réponse (apiResponse) de cette fonction est stockée dans la variable $response.
        $response = getUserByIndex($id);

        // * Si la récupération des informations de l'utilisateur à partir de getUserByIndex à échoué alors :
        // La fonction renvoie un response($success = false, $data = null, $error = "Id incorrect") et la suppression du compte n'aura pas lieu.
        if (!$response->success) return response(false, null, "Id incorrect");

        // ! =======> SUPPRESSION DU PROFIL DANS LA TABLE PROFIL <======= ! //

        // On demande à la base de données de Supprimer les valeurs présente dans table profil où le user_id est celui de la $_SESSION['id'].
        $queryProfil = "DELETE FROM profil WHERE user_id = :id";

        // Etape 1 - Préparation d'une requête SQL
        // En l'occurance notre requête SQL est stocké dans la variable $queryProfil que l'on à initialisé au préalable.
        $stmtProfil = $database->prepare($queryProfil);

        // Etape 2 - Liaison des valeurs avec des marqueurs nommées
        // En l'occurence les marqueurs nommées son :id.
        // bindParam - Lie un paramètre à un nom de variable spécifique (ici la variable $stmtProfil).
        // La variable $stmtProfil est liée en tant que référence et ne sera évaluée qu'a l'étape suivante.
        $stmtProfil->bindParam(":id", $id, PDO::PARAM_INT);

        // Etape 3 - Exécution
        // Le serveur exécute la requête préparée en passant la valeur spécifié ($id) en paramètre de la requête et stocke le résultat dans la variable $isProfilDeleted.
        $isProfilDeleted = $stmtProfil->execute();

        // ! =======> SUPPRESSION DE L'UTILISATEUR DANS LA TABLE USER <======= ! //

        // On demande à la base de données de Supprimer les valeurs présente dans table user où se trouve le $_SESSION['id'].
        $queryUser = "DELETE FROM user WHERE id = :id";

        // Etape 1 - Préparation d'une requête SQL
        // En l'occurance notre requête SQL est stocké dans la variable $queryUser que l'on à initialisé au préalable.
        $stmtUser = $database->prepare($queryUser);

        // Etape 2 - Liaison des valeurs avec des marqueurs nommées
        // En l'occurence les marqueurs nommées son :id.
        // bindParam - Lie un paramètre à un nom de variable spécifique (ici la variable $stmtUser).
        // La variable $stmtUser est liée en tant que référence et ne sera évaluée qu'a l'étape suivante.
        $stmtUser->bindParam(":id", $id, PDO::PARAM_INT);

        // Etape 3 - Exécution
        // Le serveur exécute la requête préparée en passant la valeur spécifié ($id) en paramètre de la requête et stocke le résultat dans la variable $isUserDeleted.
        $isUserDeleted = $stmtUser->execute();


        // * Si l'éxecution de la requête réussi alors les instructions ($isDone est true) alors
        if ($isProfilDeleted && $isUserDeleted) {
            // La transaction est validée en utilisant $database->commit().
            $database->commit();

            // La fonction renvoie un response($success = true).
            return response(true);
        } else {
            throw new Exception("Erreur lors de la suppression du compte");
        }
    } catch (PDOException $e) {
        // Si une erreur survient pendant l'exécution de la requête, la transaction est annulée en utilisant $database->rollBack().
        $database->rollBack();

        // La connexion à la base de données est fermée
        $database = null;

        // La fonction renvoie un response($success = false, $data = null, $error = $e->getMessage()).
        return response(false, null, "Erreur lors de la suppression du compte " . $e->getMessage());
    }
}

// ^ En résumé, cette fonction permet de supprimer un utilisateur de la base de données en utilisant son index. Elle vérifie d'abord si l'index existe en tentant de récupérer les informations de l'utilisateur, puis effectue la suppression si les informations sont trouvées. Si la suppression réussit, elle renvoie une réponse indiquant que la suppression a réussi, sinon, elle renvoie une réponse d'erreur.

// ! Ici on supprime TOUTES LES INFORMATIONS UTILISATEURS MEME SON PROFIL que l'on possède dans la base de données en fonction de son index.

#endregion