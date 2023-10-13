<div class="fiche">

    <div class="">

        <img class="affiche-conte" src="assets/contes/<?= $image ?>" alt="">
    </div>
    <h1 class="titre-conte"><?= $title ?></h1>

    <h2 class="message-error"><?= $error_message ?></h2>


    <audio controls>
        <source src="assets/contes/<?= $audio ?>" type="audio/mp3">
    </audio>

    <p class="synopsis-conte"><?= $synopsis ?></p>

    <a class="video-conte" href="?page=video&conte=<?= $title ?>">Visionner le contes</a>

</div>