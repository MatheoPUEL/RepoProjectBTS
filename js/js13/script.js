var l = prompt('Taille en largeur: ')
var h = prompt('Taille en hauteur: ')
document.write('-- Rectangle en ' + l + 'x' + h + ' -- <br><br>')
for (i = 0; i < h; i++) {
    for(x = 0; x < l; x++) {
        document.write('*')
    }
    document.write('<br>')
}