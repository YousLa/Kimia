<!-- Fichier non visible du profil (controllers) dans lequel on note le code php nécessaire à son fonctionnement -->

<?php

$error = false;
$error_message = "";

// if (isset($_SESSION['id'])) {

//     $response = getProfile($_SESSION['id']);

//     if ($response->success) {
//         $error = false;
//         $error_message = null;

//         $avatar = $response->data['avatar'];
//         $pseudo = $response->data['pseudo'];
//     } else {
//         $error = true;
//         $error_message = $response->error;
//     }
// }

if (isset($_POST['update'], $_POST['pseudo'], $_POST['avatar']) && !empty($_POST['pseudo']) && !empty($_POST['avatar'])) {

    $id = $_SESSION['id'];

    $profil = [
        'pseudo' => $_POST['pseudo'],
        'avatar' => $_POST['avatar']
    ];

    foreach ($profil as $field => $value) {
        $response = profilePatchField($id, $field, $value);


        header('Location : ?page=profile');
        if (!$response->success) {

            $error = true;
            $error_message = $response->error;
        }
    }
}






# On fait appel au fichier update profil visible (views). C'est ce fichier qui est affiché sur l'index.php grâce au router 
require_once 'views/profil/updateProfile.php';

?>