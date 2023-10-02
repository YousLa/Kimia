<?php

$fiche = "";
$avatar = "";
$pseudo = "";
$error = false;
$error_message = "";

if (isset($_SESSION['id'])) {

    $response = getProfile($_SESSION['id']);

    if ($response->success) {
        $error = false;
        $error_message = null;

        switch ($_GET['page']) {
            case 'createProfile':
                break;

            default:

                $avatar = $response->data['avatar'];
                $pseudo = $response->data['pseudo'];
                break;
        }
    } else {
        $error = true;
        $error_message = $response->error;
    }
}
?>

<div id="top">

    <nav>

        <!-- Si l'utilisateur est connecté, la version connected de la navbar est affiché -->
        <a href='?page=home'><img id="logo-header" src="assets/img/logo/Kimia.svg" alt=""></a>
        <?php if (isset($_SESSION['email'])) : ?>

            <?php if ($_GET['page'] == 'updateProfile') : ?>

            <?php else : ?>

                <?php
                switch ($_GET['page']) {
                    case 'createProfile':

                        break;

                    default:

                        echo "<div id='avatar-catalogue'>";
                        echo "<a href='?page=profile'><img id='user-avatar' src='$avatar' alt='Avatar de l'utilisateur'></a>";

                        echo "</div>";
                        break;
                }
                ?>



                <!-- VERSION CONNECTED -->
                <div id="menu-avatar">
                    <ul>
                        <!-- <li><a href='?page=profil'>PROFIL</a></li> -->
                        <li><a href='?page=account'>COMPTE</a></li>
                        <li><a href='?page=contes'>CONTES</a></li>
                        <li><a href='?page=logout'>Se deconnecter</a></li>
                    </ul>
                </div>
                <!-- VERSION CONNECTED -->

            <?php endif; ?>
            <!-- Sinon on affiche la version disconnected -->
        <?php else : ?>

            <!-- VERSION DISCONNECTED -->

            <button id='login'><a href='?page=login'>S'identifier</a></button>
            <!-- VERSION DISCONNECTED -->

        <?php endif; ?>

    </nav>
</div>