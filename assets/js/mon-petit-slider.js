console.log("MON PETIT SLIDER");

// #region grand slider 

const NB_SLIDE_CONTES = document.querySelectorAll('.slide-contes').length;
console.log(NB_SLIDE_CONTES);

for (let i = 0; i < NB_SLIDE_CONTES; i++) {
    // Tableau d'url d'affiches de conte
    const IMG_AFFICHE = document.querySelectorAll(`.slide-contes:nth-child(${i + 1}) .affiche`);
    console.log("AFFICHE :", IMG_AFFICHE);

    const ALT_IMG_AFFICHE = [];

    IMG_AFFICHE.forEach(image => {
        ALT_IMG_AFFICHE.push(image.getAttribute('alt'));
    })

    console.log("ALT :", ALT_IMG_AFFICHE);


    const gap = 16;

    const carousel = document.querySelector(".petit-carousel"),
        content = document.querySelector("#content"),
        next = document.querySelector(".next"),
        prev = document.querySelector(".prev");

    // Evenement sur la flèche next
    next.addEventListener("click", e => {
        carousel.scrollBy(width, 0);
        // TODO Toggle 
        if (carousel.scrollWidth !== 0) {
            prev.style.display = "flex";
        }
        if (content.scrollWidth - width <= carousel.scrollLeft + width) {
            next.style.display = "none";
        }
    });

    // Evenement sur la flèche previous
    prev.addEventListener("click", e => {
        carousel.scrollBy(-(width), 0);
        if (carousel.scrollLeft - width <= 0) {
            prev.style.display = "none";
        }
        if (!content.scrollWidth - width <= carousel.scrollLeft + width) {
            next.style.display = "flex";
        }
    });

    let width = carousel.offsetWidth;
    window.addEventListener("resize", e => (width = carousel.offsetWidth));

}

// // ! #########################################################################
// // ! ========================== SRC IMAGES DU SLIDE ==========================
// // ! #########################################################################

// // * Récupération des IMG_AFFICHE sous forme de tableau
// const IMG_AFFICHE = document.querySelectorAll('.slide-contes:nth-child(1) .affiche');
// console.log(IMG_AFFICHE);
// console.log(IMG_AFFICHE.length);

// // Créez un tableau vide pour stocker les valeurs "src"
// const SRC_IMG_AFFICHE = [];

// // Parcourez chaque image et extrayez son attribut "src"
// IMG_AFFICHE.forEach(image => {
//     SRC_IMG_AFFICHE.push(image.getAttribute('src'));
// });

// // Maintenant, SRC_IMG_AFFICHE contient les valeurs "src" de toutes les images avec la classe "slide-pic"
// console.log(SRC_IMG_AFFICHE);

// // ! #########################################################################
// // ! ========================== ALT IMAGES DU SLIDE ==========================
// // ! #########################################################################

// // Créez un tableau vide pour stocker les valeurs "alt"
// const ALT_IMG_AFFICHE = [];

// // Parcourez chaque image et extrayez son attribut "alt"
// IMG_AFFICHE.forEach(image => {
//     ALT_IMG_AFFICHE.push(image.getAttribute('alt'));
// });

// // Maintenant, ALT_IMG_AFFICHE contient les valeurs "alt" de toutes les images avec la classe "slide-pic"
// console.log(ALT_IMG_AFFICHE);