<!-- LOG IN - SE CONNECTER -->

<?php

session_start();

// TODO ============> Fonction de vérification <===========


if (isset($_POST['login'])) {

    $pseudo = trim($_POST['pseudo']);
    $loginpwd = trim($_POST['password']);


    if (!empty($pseudo) && !empty($loginpwd)) {
        include_once "./template/connectDB.php";
        $query = "SELECT pseudo FROM customer WHERE pseudo = :pseudo";
        $objet = $database->prepare($query);
        $options = array(
            ":pseudo" => $pseudo
        );


        if ($objet->execute($options)) {
            if (count($objet->fetchAll()) > 0) {
                # Email trouvé
                $query = "SELECT * FROM customer WHERE pseudo = :pseudo AND password = sha2(:password,256)";
                $objet = $database->prepare($query);

                $options = array(
                    ":pseudo" => $pseudo,
                    ":password" => $loginpwd
                );

                if ($objet->execute($options)) {
                    $user = $objet->fetchAll();

                    if (count($user) > 0) {
                        # Pseudo et password OK
                        $_SESSION['pseudo'] = $user[0]['pseudo'];
                        header('Location: ./index.php');
                    } else {
                        # Pseudo et password KO
                        $message_erreur = "<p> Login / Mot de passe incorrect </p>";
                    }
                } else {
                    # Erreur lors de la requête
                    // TODO mettre en place un message
                }
            }
        }
    }
    // else if (!empty($pseudo) && !empty($loginpwd)) {
    //     include_once "./template/connectDB.php";
    //     $query = "SELECT pseudo FROM admin WHERE pseudo = :pseudo";
    //     $objet = $database->prepare($query);
    //     $options = array(
    //         ":pseudo" => $pseudo
    //     );
    // }
}




?>


<h1>LOG IN</h1>

<form action="./index.php?page=login" method="POST">

    <label for="pseudo">Pseudo</label>
    <input type="text" name="pseudo" id="pseudo" required>

    <label for="password">Password</label>
    <input type="password" name="password" id="password" required>

    <button type="submit" name="login">Se connecter</button>
</form>