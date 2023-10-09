<!-- Afficher le grand slider  -->
<div class="carousel">
    <img src="" alt="">
    <span id="prev"> <img src="assets/img/icons/previous-blanc.svg" alt=""> </span>

    <?php foreach ($tendances as $cle => $tendance) : ?>

        <img class="slide-pic" src="assets/contes/<?= $tendance['image']; ?>" alt="<?= $tendance['title'] ?>">

    <?php endforeach; ?>

    <span id="next"> <img src="assets/img/icons/next-blanc.svg" alt=""> </span>
    <div id="dots">

    </div>
</div>


<!-- Pour chaque catégories dans le tableau -->

<ul>

    <?php foreach ($categories as $cle => $category) : ?>
        <li class="slide-contes">


            <!-- Titre de catégories -->
            <h1><?= $category['label'] ?></h1>

            <?php

            // On utilise la fonction getContes() Pour allez chercher les contes selon la catégorie
            $responseContes = getContes($category['id']);

            if ($responseContes->success) {
                $contes = $responseContes->data;
            } else {
                $error = true;
                $error_message = $response->error;
            }

            ?>

            <ul class="catalogue">
                <!-- Pour chaque contes dans le tableau -->
                <?php foreach ($contes as $cle => $conte) : ?>

                    <!-- Extraction des données d'un conte dans une variable -->

                    <li class='contes'>

                        <!-- Titre de conte -->
                        <h2><a href='?page=fiche&conte=<?= htmlspecialchars($conte['title']) ?>'> <?= $conte['title'] ?></a></h2>

                        <!-- Affiche de conte -->
                        <img class="affiche" src="assets/contes/<?= $conte['image'] ?>">

                    </li>
                <?php endforeach; ?>
            </ul>


        </li>
    <?php endforeach; ?>

</ul>