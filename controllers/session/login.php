<!-- LOG IN - SE CONNECTER -->

<?php
$message = "";

//var_dump($_POST);

if (isset($_POST['login'])) {

    if (empty($_POST['email']) || empty($_POST['password'])) {

        $message = "<span>All fields are required</span>";
    } else {
        // Connexion à la base de données
        include_once "models/database.php";

        // Création de la requête
        $query = "SELECT * FROM customer WHERE email = :email AND password = sha2(:password, 256)";

        $objet = $database->prepare($query);

        $objet->execute(
            array(
                ":email" => $_POST['email'],
                ":password" => $_POST['password']
            )
        );

        $count = $objet->rowCount();
        $arrayResult = $objet->fetchAll(PDO::FETCH_ASSOC);


        if ($count > 0) {

            // Ajouter des variables session 

            $_SESSION['email'] = $arrayResult[0]['email'];
            $_SESSION['pseudo'] = $arrayResult[0]['pseudo'];
            $_SESSION['birthdate'] = $arrayResult[0]['birthdate'];
            $_SESSION['created_at'] = $arrayResult[0]['created_at'];
            $_SESSION['updated_at'] = $arrayResult[0]['updated_at'];
            header('Location: ?page=contes');
        } else {
            $message = "<span>Wrong Data</span>";
        }
    }
}

require_once 'views/session/login.php';
