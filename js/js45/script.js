let max = 100
let min = 1
let compteur = 0;

document.getElementById('find').innerHTML = "Vous devez deviner un entier compris entre " + min +" et "+ max + "</br>"
const nombre = Math.floor(Math.random()*(max - min)) + min;
console.log(nombre)

function find() {
    var input = document.getElementById('input').value;
    compteur++
    if(input == nombre) {
        document.getElementById('result').innerHTML += input + ": <b> Vous avez trouver le bon chiffre en </b>" + compteur + " coup(s)."
        document.getElementById('input').setAttribute("disabled", "disabled");
    } else {
        if (input < nombre) {
            document.getElementById('result').innerHTML += input + ": C'est plus </br>"
        } else {
            document.getElementById('result').innerHTML += input + ": C'est moins </br>"
        }
    }
}