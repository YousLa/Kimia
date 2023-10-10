console.log("TEST 2");

// #region grand slider 

// ! #########################################################################
// ! ========================== SRC IMAGES DU SLIDE ==========================
// ! #########################################################################

// * Récupération des IMG_TENDANCES en tendances sous forme de tableau
const IMG_TENDANCES = document.querySelectorAll('.slide-pic');
console.log(IMG_TENDANCES);
console.log(IMG_TENDANCES.length);

// Créez un tableau vide pour stocker les valeurs "src"
const SRC_IMG_TENDANCES = [];

// Parcourez chaque image et extrayez son attribut "src"
IMG_TENDANCES.forEach(image => {
    SRC_IMG_TENDANCES.push(image.getAttribute('src'));
});

// Maintenant, SRC_IMG_TENDANCES contient les valeurs "src" de toutes les images avec la classe "slide-pic"
console.log(SRC_IMG_TENDANCES);

// ! #########################################################################
// ! ========================== ALT IMAGES DU SLIDE ==========================
// ! #########################################################################

// Créez un tableau vide pour stocker les valeurs "alt"
const ALT_IMG_TENDANCES = [];

// Parcourez chaque image et extrayez son attribut "alt"
IMG_TENDANCES.forEach(image => {
    ALT_IMG_TENDANCES.push(image.getAttribute('alt'));
});

// Maintenant, ALT_IMG_TENDANCES contient les valeurs "alt" de toutes les images avec la classe "slide-pic"
console.log(ALT_IMG_TENDANCES);

// * Récupération des éléments HTML :
const IMG_CAROUSEL = document.querySelector('.carousel img');
const DOTS = document.getElementById('dots');
const PREV = document.getElementById('prev');
const NEXT = document.getElementById('next');
const CAROUSEL = document.querySelector('.carousel');

// * Déclaration de variables nécessaire à la logigue du code : 
let currentImg = 0;
let timer;

// * Setup de la première image dans le HTML
IMG_CAROUSEL.src = SRC_IMG_TENDANCES[currentImg];
IMG_CAROUSEL.alt = ALT_IMG_TENDANCES[currentImg];

// * Création des dots
IMG_TENDANCES.forEach(image => {
    DOTS.innerHTML += " <div class='dot'> </div> "
});

// * Setup pour mettre le premier point en actif
DOTS.children[currentImg].classList.add('active-dot')

// * Setup du bouton précédent
PREV.addEventListener('click', () => {
    clearInterval(timer);
    changeImage(-1);
    startTimer();
})

// * Setup du bouton suivant
NEXT.addEventListener('click', () => {
    clearInterval(timer);
    changeImage(1);
    startTimer();
})

// * Création du timer
timer = setInterval(() => {
    changeImage(1);
}, 2750)

// * Ajout de l'event pour stopper le timer quand on a la souris sur le carousel
CAROUSEL.addEventListener('mouseover', () => {
    clearInterval(timer);
})

// * ? Ajout de l'event pour reprendre le timer quand on a la souris sur le carousel
CAROUSEL.addEventListener('mouseleave', () => {
    timer = setInterval(() => {
        changeImage(1);
    }, 2750)
})

// * Mise en place du changer-ment d'image avec les dots
// ~ DOTS.children étant une list d'éléments HTML et non un tableau Array.from() va permettre de le transformer en tableau pour pouvoir faire une boucle dessus
Array.from(DOTS.children).forEach((DOT, indice) => {
    DOT.addEventListener('click', () => {
        DOTS.children[currentImg].classList.remove('active-dot');

        currentImg = indice;

        IMG_CAROUSEL.src = SRC_IMG_TENDANCES[currentImg];
        IMG_CAROUSEL.alt = ALT_IMG_TENDANCES[currentImg];
        DOTS.children[currentImg].classList.add('active-dot');
    })
})

// Optimisation -> fonction
function changeImage(count) {
    DOTS.children[currentImg].classList.remove('active-dot');


    currentImg += count;


    if (currentImg < 0) {
        currentImg = SRC_IMG_TENDANCES.length - 1;
    }
    if (currentImg >= SRC_IMG_TENDANCES.length) {
        currentImg = 0;
    }

    IMG_CAROUSEL.src = SRC_IMG_TENDANCES[currentImg];
    IMG_CAROUSEL.alt = ALT_IMG_TENDANCES[currentImg];
    DOTS.children[currentImg].classList.add('active-dot');
}

// #endregion

