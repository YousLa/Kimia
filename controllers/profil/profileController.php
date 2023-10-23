<?php


$error = false;
$error_message = "";
$avatar = "";
$pseudo = "";

if (isset($_SESSION['id'])) {

    $response = getProfile($_SESSION['id']);

    if ($response->success) {
        $error = false;
        $error_message = null;

        $avatar = $response->data['avatar'];
        $pseudo = $response->data['pseudo'];
    } else {
        $error = true;
        $error_message = $response->error;
    }
}

require_once 'views/profil/profileView.php';
