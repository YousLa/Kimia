<!-- SIGN UP - INSCRIPTION -->
<?php

$success = false;
$error = false;
$error_message = null;

if (isset($_POST['send'], $_POST['email'], $_POST['sujet'], $_POST['message']) && !empty($_POST['email']) && !empty($_POST['sujet']) && !empty($_POST['message'])) {



    $email = htmlspecialchars(trim($_POST['email']));
    $sujet = htmlspecialchars(trim($_POST['sujet']));
    $message = htmlspecialchars(trim($_POST['message']));


    $contactData = [
        "email" => $email,
        "sujet" => $sujet,
        "message" => $message,
    ];

    $response = sendMessage($contactData);

    if ($response->success) {

        $success = $response->success;
        header('Location: ?page=contact');
    } else {
        $error = true;
        $error_message = $response->error;
    }
}

require_once 'views/pages/contactView.php';
?>