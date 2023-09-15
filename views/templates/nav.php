<div id="top">

    <nav>

        <!-- Si l'utilisateur est connecté, la version connected de la navbar est affiché -->
        <?php if (isset($_SESSION['email'])) : ?>

            <!-- VERSION CONNECTED -->
            <a href='?page=home'><img id="logo-header" src="assets/img/logo/Kimia.svg" alt=""></a>
            <ul>
                <a href='?page=profil'>PROFIL</a>
                <a href='?page=account'>COMPTE</a>
                <a href='?page=contes'>CONTES</a>
            </ul>
            <button id='logout'><a href='?page=logout'>Se deconnecter</a></button>
            <!-- VERSION CONNECTED -->

            <!-- Sinon on affiche la version disconnected -->
        <?php else : ?>

            <!-- VERSION DISCONNECTED -->

            <button id='login'><a href='?page=login'>S'identifier</a></button>
            <!-- VERSION DISCONNECTED -->

        <?php endif; ?>

    </nav>
</div>