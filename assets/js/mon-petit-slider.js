console.log("MON PETIT SLIDER");

// #region grand slider 

const SLIDE_CONTES = document.querySelectorAll('.slide-contes');
const NB_SLIDE_CONTES = SLIDE_CONTES.length;

console.log(NB_SLIDE_CONTES);

for (let i = 0; i < NB_SLIDE_CONTES; i++) {

    const conteActuel = SLIDE_CONTES[i];

    // Tableau d'url d'affiches de conte
    const IMG_AFFICHE = document.querySelectorAll(`.slide-contes:nth-child(${i + 1}) .affiche`);
    console.log("AFFICHE1 :", IMG_AFFICHE);

    const IMG_AFFICHE2 = conteActuel.querySelectorAll(`.affiche`);
    console.log("AFFICHE2 :", IMG_AFFICHE2);

    const ALT_IMG_AFFICHE = [];

    IMG_AFFICHE.forEach(image => {
        ALT_IMG_AFFICHE.push(image.getAttribute('alt'));
    })

    console.log("ALT :", ALT_IMG_AFFICHE);


    const gap = 16;

    const carousel = conteActuel.querySelector(".petit-carousel"),
        content = conteActuel.querySelector(".content"),
        next = conteActuel.querySelector(".next"),
        prev = conteActuel.querySelector(".prev");


    console.warn("TEST :", next, prev);

    // Evenement sur la flèche next
    console.log(next)
    next.addEventListener("click", e => {
        console.log('buton next')

        console.log("carousel.scrollLeft", carousel.scrollLeft);


        // ↓ Utiliser ceci pour detecter les nagivateur "Gecko"
        console.log(navigator);

        if (false) {
            // Fix pour Firefox (Gecko)
        }
        else {
            // Sénario classique
            carousel.scrollBy(width + gap, 0);
        }

        if (carousel.scrollWidth !== 0) {
            // Toggle sur la flèche previous en mode display flex
            prev.classList.remove('none');
            prev.classList.add('flex');
        }
        if (content.scrollWidth - width <= carousel.scrollLeft + width) {
            // Toggle sur la flèche next en mode display none
            next.classList.remove('flex');
            next.classList.add('none');
        }
    });

    // Evenement sur la flèche previous
    prev.addEventListener("click", e => {


        carousel.scrollBy(-(width + gap), 0);


        if (carousel.scrollLeft - width <= 0) {
            // Toggle sur la flèche previous en mode display none
            prev.classList.remove('flex');
            prev.classList.add('none');
        }
        if (!content.scrollWidth - width <= carousel.scrollLeft + width) {
            // Toggle sur la flèche next en mode display flex
            next.classList.remove('none');
            next.classList.add('flex');
        }
    });

    let width = carousel.offsetWidth;
    window.addEventListener("resize", e => (width = carousel.offsetWidth));

}
