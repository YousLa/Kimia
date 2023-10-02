<!-- BOUTON SE DECONNECTER -->

<?php

unset($_SESSION['id']);
unset($_SESSION['email']);
unset($_SESSION['role']);

// Une fois que les variables session sont unset on peut détruire la session en cours
session_destroy();

// Redirection vers la page home - hors connexion
header('Location: ?page=home');

?>

<!-- LOG OUT - SE DECONNECTER -->