<?php

$view = "";
$css = array(
    'assets/css/home.css'
);
$js = array(
    'assets/js/slide-homepage.js',
    'assets/js/assets/js/avatar.js'
);

//! Nouvelle version du routing => View + CSS + JS 🍹
if (isset($_GET['page'])) {

    switch ($_GET['page']) {

            // ^ ======================= HOMEPAGE IN/OUT =======================

        case 'home':

            // * View 
            if (isset($_SESSION['email'])) {
                $view =  'controllers/contes/contesController.php';
            } else {
                $view =  'views/pages/homeView.php';
            }

            // * Ressource CSS 
            $css = array(
                'assets/css/home.css',
                'assets/css/catalogue.css'
            );

            // * JS
            $js = array(
                'assets/js/slide-homepage.js'
            );

            break;

            // ^ ======================= INSCRIPTION =======================

        case 'signup':

            // * View 
            $view =  'controllers/session/signupController.php';

            // * Ressource CSS 
            $css = array(
                'assets/css/signup.css'
            );

            // * JS
            $js = array();

            break;

            // ^ ======================= PROFIL =======================

        case 'profile':

            // * View 
            $view =  'controllers/profil/profileController.php';

            // * Ressource CSS 
            $css = array(
                'assets/css/profile.css'
            );

            // * JS
            $js = array();

            break;

            // ^ ======================= CREATION DU PROFIL =======================
        case 'createProfile':

            // * View 
            $view =  'controllers/profil/createProfileController.php';

            // * Ressource CSS 
            $css = array(
                'assets/css/createProfil.css'
            );

            // * JS
            $js = array(
                'assets/js/avatar.js'
            );

            break;

            // ^ ======================= MODIFICATION DU PROFIL =======================

        case 'updateProfile':

            // * View 
            $view =  'controllers/profil/updateProfileController.php';

            // * Ressource CSS 
            $css = array(
                'assets/css/createProfil.css'
            );

            // * JS
            $js = array(
                'assets/js/avatar.js'
            );

            break;

            // ^ ======================= COMPTE =======================

        case 'account':

            // * View
            $view =  'controllers/user/account.php';

            // * Ressource CSS
            $css = array();

            // * JS
            $js = array();

            break;

            // ^ ======================= MODIFICATION DU COMPTE =======================

        case 'updateaccount':

            // * View
            $view =  'controllers/user/updateAccount.php';

            // * Ressource CSS
            $css = array();

            // * JS
            $js = array();

            break;

            // ^ ======================= CONNEXION =======================

        case 'login':

            // * View
            $view =  'controllers/session/loginController.php';

            // * Ressource CSS
            $css = array(
                'assets/css/login.css'
            );

            // * JS
            $js = array();

            break;

            // ^ ======================= DECONNEXION =======================

        case 'logout':

            // * View
            $view =  'controllers/session/logoutController.php';

            // * Ressource CSS
            $css = array();

            // * JS
            $js = array();

            break;

            // ^ ======================= FICHE DESCRIPTIVE DE CONTE =======================

        case 'fiche':

            // * View
            $view =  'controllers/contes/ficheController.php';

            // * Ressource CSS
            $css = array(
                'assets/css/fiche.css'
            );

            // * JS      
            $js = array();

            break;

            // ^ ======================= LECTEUR VIDEO =======================

        case 'video':

            // * View
            $view =  'controllers/contes/videoController.php';

            // * Ressource CSS
            $css = array();

            // * JS 
            $js = array();

            break;

            // ^ ======================= CATALOGUE CONTES =======================

        case 'contes':

            // * View
            $view =  'controllers/contes/contes.php';

            // * Ressource CSS
            $css = array(
                'assets/css/contes.css'
            );

            // * JS
            $js = array();

            break;

            // ^ ======================= ERROR 404 =======================

        default:

            // * View
            $view =  'views/errors/fourofour.php';

            // * Ressource CSS
            $css = array();

            // * JS
            $js = array();
            break;
    }
} else {
    // * View 
    if (isset($_SESSION['email'])) {
        $view =  'controllers/contes/contesController.php';
    } else {
        $view =  'views/pages/homeView.php';
    }
}
