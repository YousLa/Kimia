// < !--Animation input: garder fixe l'input quand il est complété -->

console.log('test son père')

const inputs = document.querySelectorAll('input');

for (let i = 0; i < inputs.length; i++) {
    let field = inputs[i];

    field.addEventListener('input', (e) => {

        if (e.target.value != "") {
            e.target.parentNode.classList.add('animation');
        } else if (e.target.value == "") {
            e.target.parentNode.classList.remove('animation');
        }
    })
}