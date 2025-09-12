var l = prompt('Taille en largeur: ')
var h = prompt('Taille en hauteur: ')
document.write('-- Rectangle en ' + l + 'x' + h + ' -- <br><br>')
for (i = 0; i < h; i++) {
    if (i == 0 || i == h -1) {
        document.write(("*").repeat(l) + ("<br>"))
    } else {
        document.write("*" + ("&nbsp;").repeat(l - 2) + "*<br>")
    }
}