<?php

$fiche = "";
$avatar = "";
$pseudo = "";
$error = false;
$error_message = "";

// Pour récuperer les informations du profil de l'utilisateur connecté
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
                    case 'updateProfile':

                        break;
                    default:

                        echo "<div class='dropdown'>";
                        echo "<img id='user-avatar' class='dropbtn' src='$avatar' alt='Avatar de l'utilisateur'>";
                        echo "<div id='dropdown-content'>";
                        echo "<a href='?page=profile'><img class='icon' src='assets/img/icons/edit-blanc.svg' alt='compte'> Gérer le profil</a>";
                        echo "<a href='?page=account'><img class='icon' src='assets/img/icons/user-blanc.svg' alt='compte'> Compte</a>";
                        echo "<div id='logout'>";
                        echo "<a href='?page=logout'>Se déconnecter</a>";
                        echo "</div>";
                        echo "</div>";
                        echo "</div>";
                        break;
                }
                ?>

    </nav>
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