console.log('LocalStorage');

// TODO

// Récupérez les adresses e-mail depuis les champs de la page d'accueil
const emailTop = document.getElementById('email-top');
const emailBot = document.getElementById('email-bot');

// Fonction pour enregistrer l'adresse e-mail dans localStorage
function saveEmail() {
    localStorage.setItem('userEmailTop', emailTop.value);
    localStorage.setItem('userEmailBot', emailBot.value);
}

// Ajoutez des gestionnaires d'événements pour les changements dans les champs
emailTop.addEventListener('input', saveEmail);
emailBot.addEventListener('input', saveEmail);

// Récupération du bouton "Commencer"
const startButton = document.getElementById('signup');

// Ajoutez un gestionnaire d'événements pour le bouton "Commencer"
startButton.addEventListener('click', () => {
    saveEmail(); // Enregistrez l'adresse e-mail une dernière fois avant de rediriger
    window.location.href = '?page=signup'; // Redirigez l'utilisateur vers la page d'inscription
});

// Vérifiez si une adresse e-mail est présente dans localStorage
if (localStorage.getItem('userEmailTop') && localStorage.getItem('userEmailBot')) {
    if (localStorage.getItem('userEmailTop') === "") {
        // Récupérez l'adresse e-mail depuis localStorage
        const savedEmail = localStorage.getItem('userEmailBot');
        // Remplissez les champs d'adresse e-mail sur la page d'inscription avec l'adresse e-mail
        document.getElementById('email').value = savedEmail;
    } else {
        // Récupérez l'adresse e-mail depuis localStorage
        const savedEmail = localStorage.getItem('userEmailTop');
        // Remplissez les champs d'adresse e-mail sur la page d'inscription avec l'adresse e-mail
        document.getElementById('email').value = savedEmail;
    }
}