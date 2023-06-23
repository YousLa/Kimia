<!-- SIGN UP - INSCRIPTION -->
<?php

# Lancement de la session
session_start();

if (isset($_POST['register'], $_POST['pseudo'], $_POST['email'], $_POST['birthdate'], $_POST['password']) && !empty($_POST['pseudo']) && !empty($_POST['email']) && !empty($_POST['birthdate']) && !empty($_POST['password'])) {

    $pseudo = trim($_POST['pseudo']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $birthdate = trim($_POST['birthdate']);

    // ! Chemin a partir du fucking fichier "index.php"
    include_once "./template/connectDB.php";

    $query = "
    INSERT INTO customer
    VALUES (NULL, :pseudo, :email, sha2(:password, 256), :birthdate, DEFAULT, DEFAULT)
    ";

    $objet = $database->prepare($query);

    $options = array(
        ":pseudo" => $pseudo,
        ":email" => $email,
        ":password" => $password,
        ":birthdate" => $birthdate
    );

    if ($objet->execute($options)) {

        header("Location: ./index.php?page=login&successRegister");
        // TODO Créer un GET pour afficher un message lorsque la creation de compte à bien été effectué
    }
} else if (isset($_POST['register'])) {
    $error_message = "<p class='alert' > Veuillez complèter tous les champs.</p>";
}

?>

<h1>Registration Form</h1>

<?php if (!empty($error_message)) echo $error_message;  ?>

<form action="./index.php?page=signup" method="POST">

    <label for="pseudo">Pseudo</label>
    <input type="text" name="pseudo" id="pseudo">

    <label for="email">Email adress</label>
    <input type="email" name="email" id="email" required>

    <label for="birthdate">Date of birth</label>
    <input type="date" name="birthdate" id="birthdate">

    <label for="password">Password</label>
    <input type="password" name="password" id="password" required>

    <button type="submit" name="register">Register</button>
</form>