<!-- <section class="login-hero-section">

    <div class="login-form-box"> -->
<main id="create-profil">
    <form id="create-profil-form" action="?page=login" method="POST">

        <h1 class="loginh1">S'identifier</h1>



        <?php if ($error) {
            // Lui donner un comportement css alert pour qu'il se distingue des autres élément de la page
            echo "<div>$error_message</div>";
        } ?>

        <div class="commencer">
            <div class="input-container">
                <div class="input-field">
                    <div>
                        <input type="text" name="email" id="email" autocomplete="off" value="<?= isset($_POST['email']) ? $_POST['email'] : '' ?>" placeholder=" ">
                        <label for="email">Adresse e-mail</label>
                    </div>
                </div>
            </div>
        </div>

        <div class="commencer">
            <div class="input-container">
                <div class="input-field">
                    <div>
                        <input type="password" name="password" id="password" placeholder=" ">
                        <label for="password">Mot de passe</label>
                    </div>
                </div>
            </div>
        </div>


        <!-- TODO Rendre le mot de passe visible au click/hold de la souris -->
        <!-- <div>
                <input type="checkbox" name="toggle-visibility" id="toggle-visibility" oninput="toggleVisibility()">
                <label for="toggle-visibility">Afficher le mot de passe</label>
            </div> -->

        <div>
            <button type="submit" name="login" class="login-btn send-profil">Terminer</button>
            <p id="signup">Pas encore inscrit ? Cliquez <a href="?page=signup">ici</a>.</p>
        </div>



    </form>
</main>

<!-- </div>

</section> -->