<?php

session_start();

unset($_SESSION['pseudo']);

session_destroy();

header('Location: ./login.php');

?>

<!-- LOG OUT - SE DECONNECTER -->

<h1>PAGE DE DECONNEXION</h1>