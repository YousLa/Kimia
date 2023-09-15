<!-- SIGN UP - INSCRIPTION -->
<?php


if (isset($_POST['register'], $_POST['email'], $_POST['password']) && !empty($_POST['email']) && !empty($_POST['password'])) {

    $email = trim($_POST['email']);
    $password = $_POST['password'];


    // ! Chemin a partir du fucking fichier "index.php"
    include_once "models/database.php";

    $query = "INSERT INTO user (email, password)
    VALUES
        (:email, sha2(:password, 256))
    ";

    $objet = $database->prepare($query);

    $options = array(

        ":email" => $email,
        ":password" => $password,

    );

    if ($objet->execute($options)) {

        $query2 = "SELECT * FROM user WHERE email = :email AND password = sha2(:password, 256)";

        $objet = $database->prepare($query2);

        $objet->execute(
            array(
                ":email" => $email,
                ":password" => $password
            )
        );

        $count = $objet->rowCount();
        $arrayResult = $objet->fetchAll(PDO::FETCH_ASSOC);


        if ($count > 0) {

            // Ajouter des variables session 

            $_SESSION['email'] = $arrayResult[0]['email'];
            $_SESSION['id'] = $arrayResult[0]['id'];

            header("Location: ?page=createprofil");
        }
    } else if (isset($_POST['register'])) {
        $error_message = "<p class='alert' > Veuillez complèter tous les champs.</p>";
    }
}

require_once 'views/session/signup.php';
?>