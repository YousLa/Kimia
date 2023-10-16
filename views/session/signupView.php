<section class="signup-hero-section">

    <div class="signup-form-box">

        <form action="?page=signup" method="POST" class="form">

            <div class="signup-input-box">

                <h1 class="signuph1">Créer un mot de passe pour activer votre compte</h1>

                <?php if ($error) {
                    // Lui donner un comportement css alert pour qu'il se distingue des autres élément de la page
                    echo "<div>$error_message</div>";
                } ?>


                <div class="signup-form-box1">

                    <input type="text" name="email" id="email" autocomplete="off" value="<?= isset($_POST['email']) ? $_POST['email'] : '' ?>">
                    <label for="email">Adresse e-mail</label>

                </div>


                <div class="signup-form-box1">
                    <input type="password" name="password" id="password">
                    <label for="password">Mot de passe</label>


                </div>


                <div class="signup-form-box1">

                    <input type="password" name="password_confirm" id="password_confirm">
                    <label for="">Confirmer le mot de passe</label>

                </div>

            </div>

            <div>

                <button type="submit" name="register" class="btn-sign">Terminer</button>

            </div>




        </form>

    </div>


</section>