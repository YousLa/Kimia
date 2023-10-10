

<section class="signup-hero-section">

<div class="signup-form-box">

    <form action="?page=signup" method="POST">

        <div class="signup-input-box" >

        <h1 class="signuph1">Créer un mot de passe pour activer votre compte</h1>

        <?php if ($error) {
            // Lui donner un comportement css alert pour qu'il se distingue des autres élément de la page
            echo "<div>$error_message</div>";
        } ?>


    <div class="signup-form-box1">

        <input type="text" name="email" id="email" autocomplete="off"  value="<?= isset($_POST['email']) ? $_POST['email'] : '' ?>">
        <label for="">Adresse e-mail</label>

    </div> 


    <div class="signup-form-box1" >
        <input type="password" name="password" id="password" >
        <label for="">Mot de passe</label>


    </div>


    <div class="signup-form-box1">

        <input type="password" name="password_confirm" id="password_confirm" >
        <label for="">Confirmer le mot de passe</label>

    </div>

</div>

    <div>

        <button type="submit" name="register" class="btn-sign">Terminer</button>

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

