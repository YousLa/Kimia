<!-- BOUTON SE DECONNECTER -->

<?php

session_start();

unset($_SESSION['pseudo']);

session_destroy();

header('Location: index.php?page=home');

?>

<!-- LOG OUT - SE DECONNECTER -->