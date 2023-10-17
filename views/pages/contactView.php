<main id="create-profil">


    <form id="create-profil-form" action="?page=contact" method="POST">

        <h1>Nous contacter</h1>

        <div class="commencer">
            <div class="input-container">
                <div class="input-field">
                    <div>
                        <input type="email" id="email" name="firstname" placeholder=" ">
                        <label for="email">Adresse e-mail</label>
                    </div>
                </div>
            </div>
        </div>

        <div class="commencer">
            <div class="input-container">
                <div class="input-field">
                    <div>
                        <input type="text" id="subject" name="lastname" placeholder=" ">
                        <label for="subject">Sujet</label>
                    </div>
                </div>
            </div>
        </div>

        <div class="commencer">
            <div class="input-container">
                <div class="input-field2">
                    <div id="interne">
                        <!-- <textarea id="subject" name="subject" style="height:100px" class="textarea"></textarea> -->
                        <input type="text" id="message" name="message" placeholder=" ">
                        <label for="message">Message</label>
                    </div>
                </div>
            </div>
        </div>


        <button type="submit" class="send-profil">Envoyer</button>

    </form>
</main>