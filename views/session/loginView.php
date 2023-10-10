
<section class="login-hero-section">

<div class="login-form-box">

<form action="?page=login" method="POST">

    <h1 class="loginh1">S'identifier</h1>

   

    <?php if ($error) {
        // Lui donner un comportement css alert pour qu'il se distingue des autres élément de la page
        echo "<div>$error_message</div>";
    } ?>

    <div class="login-input-box">

    <input type="text" name="email" id="email" autocomplete="off"  value="<?= isset($_POST['email']) ? $_POST['email'] : '' ?>">
    <label for="">Adresse e-mail</label>

    </div>

    <div class="login-input-box">

    <input type="password" name="password" id="password">
    <label for="">Mot de passe</label>

    </div>

    <!-- TODO Rendre le mot de passe visible au click/hold de la souris -->
    <!-- <div>
        <input type="checkbox" name="toggle-visibility" id="toggle-visibility" oninput="toggleVisibility()">
        <label for="toggle-visibility">Afficher le mot de passe</label>
    </div> -->

    <div >
    <button type="submit" name="login" class="login-btn">Terminer</button>
    </div>



</form>

</div>

<!--Animation input : garder fixe l'input quand il est complété -->

<script>
    const inputs = document.querySelectorAll('input');

    for (let i = 0; i < inputs.length; i++) {
        let field = inputs[i];

        field.addEventListener('input', (e) => {

            if(e.target.value != ""){
                e.target.parentNode.classList.add('animation');
            } else if(e.target.value == ""){
                e.target.parentNode.classList.remove('animation');
            }
        })
    }
</script>

</section>
