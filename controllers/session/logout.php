<!-- BOUTON SE DECONNECTER -->

<?php

session_start();



unset($_SESSION['pseudo']);
unset($_SESSION['email']);
unset($_SESSION['birthdate']);
unset($_SESSION['created_at']);
unset($_SESSION['updated_at']);

session_destroy();

header('Location: ?page=home');

?>

<!-- LOG OUT - SE DECONNECTER -->