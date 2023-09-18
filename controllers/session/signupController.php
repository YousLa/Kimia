<!-- SIGN UP - INSCRIPTION -->
<?php

$success = false;
$error = false;
$error_message = null;

if (isset($_POST['register'], $_POST['email'], $_POST['password']) && !empty($_POST['email']) && !empty($_POST['password']) && $_POST['password'] === $_POST['password_confirm']) {

    require 'models/functions/UserModel.php';

    $email = htmlspecialchars(trim($_POST['email']));
    $password = htmlspecialchars(trim($_POST['password']));


    $userData = [
        "email" => $email,
        "password" => $password,
    ];

    $response = signUp($userData);

    if ($response->success) {

        $success = $response->success;

        if (isset($_POST['email'], $_POST['password'])) {

            $response = signIn(['email' => $email, 'password' => $password]);

            if ($response->success) {
                $error = false;
                $error_message = null;

                $_SESSION['id'] = $response->data['id'];
                $_SESSION['email'] = $response->data['email'];
                $_SESSION['role'] = $response->data['role'];

                header('Location: ?page=createProfile');
            } else {
                $error = true;
                $error_message = $response->error;
            }
        }
    } else {
        $error = true;
        $error_message = $response->error;
    }
}

require_once 'views/session/signupView.php';
?>