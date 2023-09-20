<?php

if (isset($_GET['page'])) {

    switch ($_GET['page']) {
            // Page d'accueil IN/OUT
        case 'home':
            if (isset($_SESSION['email'])) {
                require_once 'controllers/contes/contes.php';
            } else {
                require_once 'controllers/home.php';
            }
            break;

            // Page d'inscription - Création du compte 
        case 'signup':
            require_once 'controllers/session/signupController.php';
            break;

            // Affichage du profil (Infos non officielles)
        case 'profil':
            require_once 'controllers/profil/profil.php';
            break;

            // Création du profil (Infos non officielles)
        case 'createProfile':
            require_once 'controllers/profil/createProfileController.php';
            break;

            // Modification du profil
        case 'updateprofil':
            require_once 'controllers/profil/updateProfil.php';
            break;

            // Affichage du compte (Infos officielle)
        case 'account':
            require_once 'controllers/user/account.php';
            break;

            // Modification du compte
        case 'updateaccount':
            require_once 'controllers/user/updateAccount.php';
            break;

            // Page de connexion
        case 'login':
            require_once 'controllers/session/loginController.php';
            break;

            // Page de déconnexion
        case 'logout':
            require_once 'controllers/session/logoutController.php';
            break;

            // Fiche descriptif d'un conte
        case 'fiche':
            require_once 'controllers/contes/fiche.php';
            break;

            // La page sur laquelle la vidéo est lancée
        case 'video':
            require_once 'controllers/contes/video.php';
            break;

            // Liste des contes
        case 'contes':
            require_once 'controllers/contes/contes.php';
            break;

            // Page 404 Not Found
        default:
            require_once 'views/errors/fourofour.php';
            break;
    }
} else {
    // S'il n'y a pas de ?page= alors on renvoie vers la page d'accueil
    require_once 'controllers/home.php';
}
