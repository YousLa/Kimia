


<section class="contact-hero-section">


<div class="contact-form-box">


<form action="?page=contact" method="POST">

<h1 class="loginh1">Nous contacter</h1>


    <div class="contact-input-box">

    <label for="fname">Prénom</label>
    <input type="text" id="fname" name="firstname" >

    </div>

    
    <div class="contact-input-box">

    <label for="lname">Nom</label>
    <input type="text" id="lname" name="lastname" >

    </div>

    
    <div class="contact-input-box1">
    <label for="subject">Votre message</label>
    <textarea id="subject" name="subject" style="height:100px" class="textarea" ></textarea>


    </div>

    <div class="submit">

    <input type="submit" value="Envoyer" class="submit1">

    </div>


    
</div> 


</form>

<script>

console.log('test son père')

const inputs = document.querySelectorAll('input');

for (let i = 0; i < inputs.length; i++) {
    let field = inputs[i];

    field.addEventListener('input', (e) => {

        if (e.target.value != "") {
            e.target.parentNode.classList.add('animation');
        } else if (e.target.value == "") {
            e.target.parentNode.classList.remove('animation');
        }
    })
}
</script>


</section>