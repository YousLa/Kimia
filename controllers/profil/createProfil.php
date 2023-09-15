<?php
$error_message = "";

var_dump($_SESSION['id']);

if (isset($_POST['send'], $_POST['pseudo'], $_POST['avatar']) && !empty($_POST['pseudo'])) {
    $id = $_SESSION['id'];
    $pseudo = trim($_POST['pseudo']);
    $avatar = $_POST['avatar'];

    include_once "models/database.php";

    $query = "INSERT INTO profil (pseudo, avatar, user_id)
    VALUES 
    (:pseudo, :avatar, :user_id)
    ";

    $objet = $database->prepare($query);

    $options = array(

        ":pseudo" => $pseudo,
        ":avatar" => $avatar,
        ":user_id" => $id,
    );
    var_dump($pseudo, $avatar);
    if ($objet->execute($options)) {
        header("Location: ?page=home");
    }
} else if (isset($_POST['send'])) {
    $error_message = "<p class='alert' > Une erreur s'est produite.</p>";
}

require_once 'views/profil/createProfil.php';
