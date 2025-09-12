function sub_cesar() {
  const chaine = document.getElementById('chaine').value;
  for (i = 1; i <= 26; i++) {
    resultat = cesar(chaine, i);
    message = "<li>"+ i + ": " + resultat + "</li></br>";
    document.getElementById("ici").innerHTML += message;
  }

}

function cesar(chaine, decalage) {
  // Définit l'alphabet
  const alphabet = "abcdefghijklmnopqrstuvwxyz";
  // Chaîne résultant du chiffrage/déchiffrage
  let resultat = "";
  // Calcule la longueur de la chaîne
  let lg = chaine.length;
  // Convertit la chaîne en minuscules
  chaine = chaine.toLowerCase();

  // Boucle de parcours de la chaîne à chiffrer
  for (let i = 0; i < lg; i++) {
    let car = chaine.charAt(i);
    // Cherche la position de la lettre dans l'alphabet
    let position = alphabet.indexOf(car);
    if (position == -1) {
      resultat += car;
    } else {
      // Applique le décalage et revient au début si nécessaire
      position = position + decalage;
      if (position > 25) {
        position = position - 26;
      }
      if (position < 0) {
        position = 26 + position;
      }
      resultat += alphabet.charAt(position);
    }
  }
  console.log(resultat)
  return resultat;
}


