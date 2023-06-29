<?php
switch ($page) {
    case '':
    case 'home':
        include "pages/home.php";
        break;
    case 'signup':
        include "pages/signup.php";
        break;
    case 'login':
        include "pages/login.php";
        break;
    case 'logout':
        include "pages/logout.php";
        break;
    case 'profil':
        include "pages/profil.php";
        break;
    case 'fiche':
        include "pages/contes.php";
        break;
    default:
        include "pages/error404.php";
}
