<h2 class="message-error"><?= $error_message ?></h2>
<div class="container-fiche">
    <a href="?page=home" class="close"><img src="assets/img/icons/close.svg" alt="Retour au catalogue"></a>

    <div class="fiche">
        <div class="left">

            <img class="affiche-conte" src="assets/contes/square/<?= $image_square ?>" alt="">

            <!-- TODO -->
            <!-- <audio class="trailer" controls>
                <source src="assets/contes/mp3/<?= $audio ?>" type="audio/mp3">
            </audio> -->
        </div>

        <div class="right">

            <h1 class="titre-conte"><?= $title ?></h1>




            <p class="synopsis-conte"><?= $synopsis ?></p>

            <button id='video-conte'>
                <a class="lien-conte" href="?page=video&conte=<?= $title ?>"><img src="assets/img/icons/play.svg" alt="Visionner le conte">Lancer</a>
            </button>
        </div>
    </div>

</div>