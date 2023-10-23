// & Ce code à effet sur la page de personnalisation du profil après l'inscription.

console.log('Personnalisez votre profil')

// * Récupération du svg de l'empty-avatar
const SVG_EMPTY_AVATAR = document.querySelector('#empty-avatar');
console.log(SVG_EMPTY_AVATAR);

// * Récupération du src de l'empty avatar
const SVG_EMPTY_AVATAR_SRC = SVG_EMPTY_AVATAR.getAttribute('src');
console.log(SVG_EMPTY_AVATAR_SRC);

// * Récupération de l'input de l'empty avatar
const INPUT_AVATAR_VALUE = document.querySelector('#avatar-input');

// * Récupération de mon modal
const DIV_MODAL = document.querySelector('.modalHidden');
console.log(DIV_MODAL);


// * Récupération des images du modal
const IMG_IMG_MODAL = document.querySelectorAll('.pic-modal');
console.log('classe de img modal', IMG_IMG_MODAL)


// * Récupération du bouton
const SPAN_CLOSE = document.querySelector('#close');
console.log(SPAN_CLOSE);



// ~ Ajout de l'évènement d'ouverture du modal sur mon empty avatar
SVG_EMPTY_AVATAR.addEventListener('click', () => {
    DIV_MODAL.classList.toggle('modalHidden');
})


// ~ Ajout de l'évènement de fermeture du modal sur mon bouton close
SPAN_CLOSE.addEventListener('click', () => {

    DIV_MODAL.classList.toggle('modalHidden');
})


// ~ Parcourir les images dans mon tableau pour ajouter un addEventListener
// For pour boucler sur chaque élément de mon tableau

for (let i = 0; i < IMG_IMG_MODAL.length; i++) {


    // La variable position est l'avatar sur lequel la personne à cliqué
    let position = IMG_IMG_MODAL[i];

    // ~ Ajout de l'évènement lorsque l'utilisateur choisi un image
    position.addEventListener('click', () => {

        // * Récupération du src de l'avatar choisi
        let src = position.getAttribute('src');
        console.log(src);

        // ^ Changement de la source de l'empty avatar
        SVG_EMPTY_AVATAR.setAttribute('src', src);

        // ^ Changement de la value de l'input de l'avatar pour pouvoir le récuperer en base de donnée
        INPUT_AVATAR_VALUE.setAttribute('value', src);
        console.log(INPUT_AVATAR_VALUE);

        // ^ Changement de vue du modal
        DIV_MODAL.classList.toggle('modalHidden');
    })

}



// & Ce code à effet lors du clic sur l'avatar sur le catalogue. Il affiche le menu qui lui ai lié