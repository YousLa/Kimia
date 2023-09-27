

<section class="signup-hero-section">

<div class="signup-form-box">

    <form action="?page=signup" method="POST">

        <div class="signup-input-box" >

        <h1 class="signuph1">Inscription</h1>

        <?php if ($error) {
            // Lui donner un comportement css alert pour qu'il se distingue des autres élément de la page
            echo "<div>$error_message</div>";
        } ?>


    <div class="signup-form-box1">

        <input type="text" name="email" id="email" autocomplete="off"  value="<?= isset($_POST['email']) ? $_POST['email'] : '' ?>">
        <label for="">Email</label>

    </div> 


    <div class="signup-form-box1" >
        <input type="password" name="password" id="password" >
        <label for="">Mot de passe</label>


    </div>


    <div class="signup-form-box1">

        <input type="password" name="password_confirm" id="password_confirm" >
        <label for="">Confirmer le mot de passe</label>

    </div>


    <div>

        <button type="submit" name="register">S'inscrire</button>

    </div>    

</div>


    </form>

</div>

</section>

<h3>test</h3>