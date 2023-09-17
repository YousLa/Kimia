<div class="flex">

    <form action="?page=signup" method="POST">

        <h1>Inscription</h1>

        <?php if ($error) {
            // Lui donner un comportement css alert pour qu'il se distingue des autres élément de la page
            echo "<div>$error_message</div>";
        } ?>

        <input type="text" name="email" id="email" autocomplete="off" placeholder="Email" value="<?= isset($_POST['email']) ? $_POST['email'] : '' ?>">

        <input type="password" name="password" id="password" placeholder="Mot de passe">

        <input type="password" name="password_confirm" id="password_confirm" placeholder="Confirmer le mot de passe">

        <button type="submit" name="register">S'inscrire</button>
    </form>

</div>