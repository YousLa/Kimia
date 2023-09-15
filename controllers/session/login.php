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
        $query = "SELECT * FROM user WHERE email = :email AND password = sha2(:password, 256)";

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

            header('Location: ?page=contes');
        } else {
            $message = "<span>Wrong Data</span>";
            var_dump($_POST['email'], $_POST['password'], $_SESSION['email']);
        }
    }
}

require_once 'views/session/login.php';
