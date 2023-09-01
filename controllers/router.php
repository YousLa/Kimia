<?php

if (isset($_GET['page'])) {

    switch ($_GET['page']) {
        case 'home':
            require_once 'controllers/home.php';
            break;

        case 'signup':
            require_once 'controllers/session/signup.php';
            break;

        case 'profil':
            require_once 'controllers/session/profil.php';
            break;

        case 'login':
            require_once 'controllers/session/login.php';
            break;

        case 'logout':
            require_once 'controllers/session/logout.php';
            break;

        case 'fiche':
            require_once 'controllers/contes/fiche.php';
            break;

        case 'video':
            require_once 'controllers/contes/video.php';
            break;

        case 'contes':
            require_once 'controllers/contes/contes.php';
            break;

        default:
            require_once 'views/errors/fourofour.php';
            break;
    }
} else {
    require_once 'controllers/home.php';
}
