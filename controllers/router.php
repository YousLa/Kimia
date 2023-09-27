<?php

$view = "";
$css = "";
$js = "";

//! Nouvelle version du routing => View + CSS + JS 🍹
if (isset($_GET['page'])) {

    switch ($_GET['page']) {

            // ^ ======================= HOMEPAGE IN/OUT =======================

        case '':
        case 'home':

            // * View 
            if (isset($_SESSION['email'])) {
                $view = 'controllers/contes/contes.php';
            } else {
                $view = 'controllers/home.php';
            }

            // * Ressource CSS 
            $css = array('assets/css/home.css');

            // * JS
            $js = [
                'assets/js/slide-homepage.js',
                'assets/js/avatar.js'
            ];

            break;

            // ^ ======================= INSCRIPTION =======================

        case 'signup':

            // * View 
            $view = 'controllers/session/signupController.php';

            // * Ressource CSS 
            $css = [
                'assets/css/signup.css'
            ];

            // * JS
            $js = [];

            break;

            // ^ ======================= PROFIL =======================

        case 'profile':

            // * View 
            $view = 'controllers/profil/profileController.php';

            // * Ressource CSS 
            $css = [
                'assets/css/profile.css'
            ];

            // * JS
            $js = [
                ''
            ];

            break;

            // ^ ======================= CREATION DU PROFIL =======================
        case 'createProfile':

            // * View 
            $view = 'controllers/profil/createProfileController.php';

            // * Ressource CSS 
            $css = [
                '<link rel="stylesheet" href="assets/css/createProfil.css">'
            ];

            // * JS
            $js = [
                ''
            ];

            break;

            // ^ ======================= MODIFICATION DU PROFIL =======================

        case 'updateProfile':

            // * View 
            $view = 'controllers/profil/updateProfileController.php';

            // * Ressource CSS 
            $css = [
                '<link rel="stylesheet" href="assets/css/createProfil.css">'
            ];

            // * JS
            $js = [
                ''
            ];

            break;

            // ^ ======================= COMPTE =======================

        case 'account':

            // * View
            $view = 'controllers/user/account.php';

            // * Ressource CSS
            $css = [
                ''
            ];

            // * JS
            $js = [
                ''
            ];

            break;

            // ^ ======================= MODIFICATION DU COMPTE =======================

        case 'updateaccount':

            // * View
            $view = 'controllers/user/updateAccount.php';

            // * Ressource CSS
            $css = [
                ''
            ];

            // * JS
            $js = [
                ''
            ];

            break;

            // ^ ======================= CONNEXION =======================

        case 'login':

            // * View
            $view = 'controllers/session/loginController.php';

            // * Ressource CSS
            $css = [
                'assets/css/login.css'
            ];

            // * JS
            $js = [
                ''
            ];

            break;

            // ^ ======================= DECONNEXION =======================

        case 'logout':

            // * View
            $view = 'controllers/session/logoutController.php';

            // * Ressource CSS
            $css = [
                ''
            ];

            // * JS
            $js = [
                ''
            ];

            break;

            // ^ ======================= FICHE DESCRIPTIVE DE CONTE =======================

        case 'fiche':

            // * View
            $view = 'controllers/contes/fiche.php';

            // * Ressource CSS
            $css = [
                'assets/css/fiche.css'
            ];

            // * JS      
            $js = [
                ''
            ];

            break;

            // ^ ======================= LECTEUR VIDEO =======================

        case 'video':

            // * View
            $view = 'controllers/contes/video.php';

            // * Ressource CSS
            $css = [
                ''
            ];

            // * JS 
            $js = [
                ''
            ];

            break;

            // ^ ======================= CATALOGUE CONTES =======================

        case 'contes':

            // * View
            $view = 'controllers/contes/contes.php';

            // * Ressource CSS
            $css = [
                'assets/css/contes.css'
            ];

            // * JS
            $js = [
                ''
            ];

            break;

            // ^ ======================= ERROR 404 =======================

        default:

            // * View
            $view = 'views/errors/fourofour.php';

            // * Ressource CSS
            $css = [
                ''
            ];

            // * JS
            $js = [
                ''
            ];
            break;
    }
}
