<!-- Afficher le grand slider  -->
<div class="carousel">
    <img src="" alt="">
    <span id="prev"> <img src="assets/img/icons/previous-blanc.svg" alt=""> </span>

    <?php foreach ($tendances as $cle => $tendance) : ?>
        <a href='?page=fiche&conte=<?= htmlspecialchars($tendance['title']) ?>'>
            <img class="slide-pic" src="assets/contes/<?= $tendance['image']; ?>" alt="<?= $tendance['title'] ?>">
        </a>
    <?php endforeach; ?>

    <span id="next"> <img src="assets/img/icons/next-blanc.svg" alt=""> </span>
    <div id="dots">

    </div>
</div>


<!-- Pour chaque catégories dans le tableau -->
<!-- On met un ul pour pouvoir manipuler le positionnement de toutes les catégories -->
<ul id="catalogue">

    <?php foreach ($categories as $cle => $category) : ?>
        <!-- Li de chaque catégories dans les quelles iil y a les contes -->
        <li class="slide-contes">


            <!-- Titre de catégories -->

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
            <!-- Wrapper -->
            <div id="wrapper">
                <h1 class="categories"><?= $category['label'] ?></h1>
                <!-- Carousel -->
                <div class="petit-carousel">
                    <!-- Contenu -->
                    <div id="content">


                        <!-- Pour chaque contes dans le tableau -->
                        <!-- Extraction des données d'un conte dans une variable conte -->
                        <?php foreach ($contes as $cle => $conte) : ?>

                            <!-- Affiche de conte -->
                            <a href='?page=fiche&conte=<?= htmlspecialchars($conte['title']) ?>'>
                                <img class="affiche" src="assets/contes/<?= $conte['image'] ?>" alt="<?= $conte['title'] ?>">
                            </a>


                        <?php endforeach; ?>

                    </div>

                </div>
                <span class="prev"> <img src="assets/img/icons/previous-blanc.svg" alt=""> </span>
                <span class=" next"> <img src="assets/img/icons/next-blanc.svg" alt=""> </span>
            </div>
        </li>

    <?php endforeach; ?>

</ul>