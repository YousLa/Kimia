<?php

$error = false;
$error_message = "";

// var_dump($_SESSION['id']);

if (isset($_POST['send'], $_POST['pseudo'], $_POST['avatar']) && !empty($_POST['pseudo']) && !empty($_POST['avatar'])) {

    require 'models/functions/ProfileModel.php';

    $userProfileData = [
        'pseudo' => $_POST['pseudo'],
        'avatar' => $_POST['avatar'],
    ];

    $response = createProfile($userProfileData);

    if ($response->success) {

        header("Location: ?page=home");
    } else {
        $error = true;
        $error_message = $response->error;
    }
}

require_once 'views/profil/createProfileView.php';
