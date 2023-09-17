<form action="?page=login" method="POST">

    <h1>Connexion</h1>

    <?php if ($error) {
        // Lui donner un comportement css alert pour qu'il se distingue des autres élément de la page
        echo "<div>$error_message</div>";
    } ?>

    <input type="text" name="email" id="email" autocomplete="off" placeholder="Email" value="<?= isset($_POST['email']) ? $_POST['email'] : '' ?>">

    <input type="password" name="password" id="password" placeholder="Mot de passe">

    <!-- TODO Rendre le mot de passe visible au click/hold de la souris -->
    <!-- <div>
        <input type="checkbox" name="toggle-visibility" id="toggle-visibility" oninput="toggleVisibility()">
        <label for="toggle-visibility">Afficher le mot de passe</label>
    </div> -->

    <button type="submit" name="login">Se connecter</button>
</form>