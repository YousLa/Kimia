<h1><?= $title ?></h1>

<h2><?= $message ?></h2>

<audio controls>
    <source src="assets/contes/<?= $audio ?>" type="audio/mp3">
</audio>

<p><?= $synopsis ?></p>

<a href="?page=video&conte=<?= $title ?>">Visionner le contes</a>