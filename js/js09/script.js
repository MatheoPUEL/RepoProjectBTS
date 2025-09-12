var poid = prompt('Entre votre poids: ')
var taille = prompt('Entrez votre taille: ')

IMC = poid / (taille * taille)
IMC = IMC.toFixed(2)

switch (true) {
    case (IMC < 16.5):
        writeIMC(taille, poid, IMC, "Détutrition")
        break

    case (IMC >= 16.5):
        writeIMC(taille, poid, IMC, "megro le couz")
        break

    case (IMC >= 18.5):
        writeIMC(taille, poid, IMC, "megro le couz")
        break

    case (IMC >=  16.5):
        writeIMC(taille, poid, IMC, "megro le couz")
        break
}

function writeIMC ( taille, poids, IMC, string ) {
    document.write('Taille: ' + taille+ "</br>")
    document.write('Poids: ' + poids + "</br>")
    document.write('IMC: ' + IMC + "</br>")
    document.write("Vous êtes dans la catégorie: " + string)
}