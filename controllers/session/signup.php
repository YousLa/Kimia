<!-- SIGN UP - INSCRIPTION -->
<?php


if (isset($_POST['register'], $_POST['pseudo'], $_POST['email'], $_POST['birthdate'], $_POST['password']) && !empty($_POST['pseudo']) && !empty($_POST['email']) && !empty($_POST['birthdate']) && !empty($_POST['password'])) {

    $pseudo = trim($_POST['pseudo']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $birthdate = trim($_POST['birthdate']);

    // ! Chemin a partir du fucking fichier "index.php"
    include_once "models/database.php";

    $query = "
    INSERT INTO user
    VALUES (NULL, , , :birthdate, :email, sha2(:password, 256),DEFAULT, DEFAULT, DEFAULT)
    ";

    $objet = $database->prepare($query);

    $options = array(
        ":pseudo" => $pseudo,
        ":email" => $email,
        ":password" => $password,
        ":birthdate" => $birthdate
    );

    if ($objet->execute($options)) {

        header("Location: ?page=login&successRegister");
        // TODO Créer un GET pour afficher un message lorsque la creation de compte à bien été effectué
    }
} else if (isset($_POST['register'])) {
    $error_message = "<p class='alert' > Veuillez complèter tous les champs.</p>";
}

require_once 'views/session/signup.php';
