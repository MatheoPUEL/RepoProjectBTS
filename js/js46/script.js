const alf = 'abcdefghijklmnopqrstuvwxyz'

let chaine = "test de chaine"
const key = 3
document.getElementById('non').innerHTML = "Chaine de caractère saisi: " + chaine;
document.getElementById('key').innerHTML = "Chiffrement avec un décallage de " + key;

for (let i = 0; i <= chaine.length; i++ ) {
    console.log(chaine.charAt(i))
    
}