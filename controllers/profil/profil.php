<?php

$profil = "";

require_once 'models/functions/ProfileModel.php';

$error = false;
$error_message = "";

if (isset($_SESSION['id'])) {

    $profil_i = getProfile($_SESSION['id']);
    var_dump($profil_i);
    die;

    if ($response->success) {
        $error = false;
        $error_message = null;

        $user_id = $response->data['id'];
        $_SESSION['email'] = $response->data['email'];
        $_SESSION['role'] = $response->data['role'];

        header('Location: ?page=home');
    } else {
        $error = true;
        $error_message = $response->error;
    }
}

require_once 'views/profil/profil.php';
