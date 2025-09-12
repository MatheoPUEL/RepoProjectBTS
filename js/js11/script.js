let poly = [
    [1, 'Invalide, il faut plus de coté.'],
    [2, 'Invalide, il faut plus de coté.'],
    [3, 'Triangle'],
    [4, 'Quadrilatère'],
    [5, 'Pentagone'],
    [6, 'Hexagone'],
    [7, 'Heptagone'],
    [8, 'Octogone'],
    [9, 'Ennéagone'],
    [10, 'Décagone'],
    [11, 'Hendécagone'],
    [12, 'Dodécagone'],
    [13, 'Triskaidécagone'],
    [14, 'Tetrakaidécagone'],
    [15, 'Pentakaidécagone'],
    [16, 'Hexakaidécagone'],
    [17, 'Heptakaidécagone'],
    [18, 'Octakaidécagone'],
    [19, 'Ennéakaidécagone'],
    [20, 'Icosagone']
];

const sides = prompt('Nombre de cotés: ')

try {
    document.write('Un polygone à ' + poly[sides][0] + ' cotés est un ' + poly[sides][1])
} catch {
    document.write('Entrez une bonne valeur dans le prompt (Entre 3 & 20)')
}
