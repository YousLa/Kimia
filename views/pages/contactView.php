<main id="create-profil">


    <form id="create-profil-form" action="?page=contact" method="POST">

        <h1>Nous contacter</h1>

        <div class="commencer">
            <div class="input-container">
                <div class="input-field">
                    <div>
                        <input type="email" id="email" name="email" placeholder=" ">
                        <label for="email">Adresse e-mail</label>
                    </div>
                </div>
            </div>
        </div>

        <div class="commencer">
            <div class="input-container">
                <div class="input-field">
                    <div>
                        <input type="text" id="sujet" name="sujet" placeholder=" ">
                        <label for="sujet">Sujet</label>
                    </div>
                </div>
            </div>
        </div>

        <div class="commencer">
            <div class="input-container">
                <div class="input-field2">
                    <div id="interne">
                        <!-- <input type="text" id="message" name="message" placeholder=" "> -->
                        <textarea id="message" name="message" class="textarea" placeholder=" "></textarea>
                        <label id="label-message" for="message">Message</label>
                    </div>
                </div>
            </div>
        </div>


        <button type="submit" name="send" class="send-profil">Envoyer</button>

    </form>
</main>