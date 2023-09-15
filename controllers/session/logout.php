<!-- BOUTON SE DECONNECTER -->

<?php

// On start la session pour pouvoir unset les variables session
session_start();

unset($_SESSION['email']);

// Une fois que les variables session sont unset on peut détruire la session en cours
session_destroy();

// Redirection vers la page home - hors connexion
header('Location: ?page=home');

?>

<!-- LOG OUT - SE DECONNECTER -->