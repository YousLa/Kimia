<?php

$view = 'home';
$css = array('assets/css/home.css');
$js = array(
    'assets/js/slide-homepage.js',
    'assets/js/avatar.js'
);

//! Nouvelle version du routing => View + CSS + JS 🍹
if (isset($_GET['page'])) {

    switch ($_GET['page']) {

            // ^ ======================= HOMEPAGE IN/OUT =======================

        case 'home':

            // * View 
            if (isset($_SESSION['email'])) {
                $view = 'contes/contesController';
            } else {
                $view = 'home';
            }

            // * Ressource CSS 
            $css = array('assets/css/home.css');

            // * JS
            $js = array(
                'assets/js/slide-homepage.js',
                'assets/js/avatar.js'
            );

            break;

            // ^ ======================= INSCRIPTION =======================

        case 'signup':

            // * View 
            $view = 'session/signupController';

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
            $view = 'profil/profileController';

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
            $view = 'profil/createProfileController';

            // * Ressource CSS 
            $css = array(
                '<link rel="stylesheet" href="assets/css/createProfil.css">'
            );

            // * JS
            $js = array();

            break;

            // ^ ======================= MODIFICATION DU PROFIL =======================

        case 'updateProfile':

            // * View 
            $view = 'profil/updateProfileController';

            // * Ressource CSS 
            $css = array(
                '<link rel="stylesheet" href="assets/css/createProfil.css">'
            );

            // * JS
            $js = array();

            break;

            // ^ ======================= COMPTE =======================

        case 'account':

            // * View
            $view = 'user/account';

            // * Ressource CSS
            $css = array();

            // * JS
            $js = array();

            break;

            // ^ ======================= MODIFICATION DU COMPTE =======================

        case 'updateaccount':

            // * View
            $view = 'user/updateAccount';

            // * Ressource CSS
            $css = array();

            // * JS
            $js = array();

            break;

            // ^ ======================= CONNEXION =======================

        case 'login':

            // * View
            $view = 'session/loginController';

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
            $view = 'session/logoutController';

            // * Ressource CSS
            $css = array();

            // * JS
            $js = array();

            break;

            // ^ ======================= FICHE DESCRIPTIVE DE CONTE =======================

        case 'fiche':

            // * View
            $view = 'contes/ficheController';

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
            $view = 'contes/videoController';

            // * Ressource CSS
            $css = array();

            // * JS 
            $js = array();

            break;

            // ^ ======================= CATALOGUE CONTES =======================

        case 'contes':

            // * View
            $view = 'contes/contes';

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
            $view = 'views/errors/fourofour';

            // * Ressource CSS
            $css = array();

            // * JS
            $js = array();
            break;
    }
} else {
}
