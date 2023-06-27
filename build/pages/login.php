<!-- LOG IN - SE CONNECTER -->

<?php

session_start();

if (isset($_POST['login'])) {
    $pseudo = trim($_POST['pseudo']);
    $pwd = $_POST['password'];
    if (!empty($pseudo) && !empty($pwd)) {
        include_once "./template/connectDB.php";
        # Vérifier si l'pseudo existe
        $query = "SELECT pseudo FROM customer WHERE pseudo = :pseudo";
        $object = $database->prepare($query);
        $options = array(
            ":pseudo" => $pseudo
        );
        if ($object->execute($options)) {
            if (count($object->fetchAll()) > 0) {
                # pseudo est trouvée
                $query = "SELECT * FROM customer WHERE pseudo = :pseudo AND password = sha2(:password, 256)";
                $object = $database->prepare($query);
                $options = array(
                    ":pseudo" => $pseudo,
                    ":password" => $pwd
                );
                if ($object->execute($options)) {
                    $user = $object->fetchAll();
                    if (count($user) > 0) {
                        # pseudo et password OK
                        $_SESSION['pseudo'] = $user[0]['pseudo'];
                        header('Location: ./index.php?page=home');
                    }
                }
            }
        }
    }
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