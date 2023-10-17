<main id="create-profil">

    <form id="create-profil-form" action="?page=signup" method="POST" class="form">

        <h1>Créer un mot de passe pour activer votre compte.</h1>

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


        <div class="commencer">
            <div class="input-container">
                <div class="input-field">

                    <div>
                        <input type="password" name="password_confirm" id="password_confirm" placeholder=" ">
                        <label for="">Confirmer le mot de passe</label>
                    </div>

                </div>
            </div>
        </div>


        <div>

            <button type="submit" name="register" class="send-profil">Terminer</button>

        </div>




</main>