<!-- Création du profil - choix du pseudo et de l'avatar -->

<main id="create-profil">

    <form id="create-profil-form" action="?page=createprofil" method="POST">

        <h1>Personnalisez votre profil</h1>

        <?= $error_message ?>

        <h2>Choisissez votre Pseudo</h2>

        <label for="pseudo"></label>
        <input type="text" name="pseudo" id="pseudo" placeholder="Pseudo">


        <h2>Choisissez votre Avatar.</h2>

        <img id="empty-avatar" src="assets/img/avatar/empty-avatar.svg" alt="Avatar vide">
        <input type="hidden" name="avatar" id="avatar" value="">

        <button name="send">Terminer</button>

    </form>


    <!-- Div caché -->
    <div class="modal modalHidden">

        <a href='?page=contes'><img id="logo" src="assets/img/logo/Kimia.svg" alt=""></a>

        <h1>Choisissez votre avatar.</h1>

        <!-- Bouton close -->
        <span id="close"><img src="assets/img/avatar/close.svg" alt=""></span>

        <div class="rang">

            <h2>Futuristique</h2>

            <img class="pic-modal" src="assets/img/avatar/futuristique/futuristique-1.jpg" alt="futuristique-1">
            <img class="pic-modal" src="assets/img/avatar/futuristique/futuristique-2.jpg" alt="futuristique-2">
            <img class="pic-modal" src="assets/img/avatar/futuristique/futuristique-3.jpg" alt="futuristique-3">
            <img class="pic-modal" src="assets/img/avatar/futuristique/futuristique-4.jpg" alt="futuristique-4">

        </div>



        <div class="rang">

            <h2>Realistique</h2>

            <img class="pic-modal" src="assets/img/avatar/realistique/realistique-1.jpg" alt="realistique-1">
            <img class="pic-modal" src="assets/img/avatar/realistique/realistique-2.jpg" alt="realistique-2">
            <img class="pic-modal" src="assets/img/avatar/realistique/realistique-3.jpg" alt="realistique-3">
            <img class="pic-modal" src="assets/img/avatar/realistique/realistique-4.jpg" alt="realistique-4">

        </div>



        <div class="rang">

            <h2>Zootopique</h2>

            <img class="pic-modal" src="assets/img/avatar/zootopique/zootopique-1.jpg" alt="zootopique-1">
            <img class="pic-modal" src="assets/img/avatar/zootopique/zootopique-2.jpg" alt="zootopique-2">
            <img class="pic-modal" src="assets/img/avatar/zootopique/zootopique-3.jpg" alt="zootopique-3">
            <img class="pic-modal" src="assets/img/avatar/zootopique/zootopique-4.jpg" alt="zootopique-4">

        </div>



        <div class="rang">

            <h2>Cartoonesque</h2>

            <img class="pic-modal" src="assets/img/avatar/cartoonesque/cartoonesque-1.jpg" alt="cartoonesque-1">
            <img class="pic-modal" src="assets/img/avatar/cartoonesque/cartoonesque-2.jpg" alt="cartoonesque-2">
            <img class="pic-modal" src="assets/img/avatar/cartoonesque/cartoonesque-3.jpg" alt="cartoonesque-3">
            <img class="pic-modal" src="assets/img/avatar/cartoonesque/cartoonesque-4.jpg" alt="cartoonesque-4">

        </div>



        <div class="rang">

            <h2>Horrifique</h2>

            <img class="pic-modal" src="assets/img/avatar/horrifique/horrifique-1.jpg" alt="horrifique-1">
            <img class="pic-modal" src="assets/img/avatar/horrifique/horrifique-2.jpg" alt="horrifique-2">
            <img class="pic-modal" src="assets/img/avatar/horrifique/horrifique-3.jpg" alt="horrifique-3">
            <img class="pic-modal" src="assets/img/avatar/horrifique/horrifique-4.jpg" alt="horrifique-4">

        </div>

    </div>

</main>