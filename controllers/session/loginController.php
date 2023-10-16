<!-- LOG IN - SE CONNECTER -->

<?php

$error = false;
$error_message = null;

//var_dump($_POST);

if (isset($_POST['login'])) {



    $email = trim(htmlspecialchars($_POST['email']));
    $password = trim(htmlspecialchars($_POST['password']));

    $response = signIn(['email' => $email, 'password' => $password]);

    if ($response->success) {
        $error = false;
        $error_message = null;

        $_SESSION['id'] = $response->data['id'];
        $_SESSION['email'] = $response->data['email'];
        $_SESSION['role'] = $response->data['role'];

        // TODO Vérifier si le profil à été completé, sinon rediriger vers la création de profil
        header('Location: ?page=home');
    } else {
        $error = true;
        $error_message = $response->error;
    }
}

require_once 'views/session/loginView.php';
