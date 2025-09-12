const table = prompt('Entrez la table que vous voulez: ');

i = 1
do {
    document.write(table + " x " + i + " = " + table*i +'<br>')
    i++
} while (i <= 10)