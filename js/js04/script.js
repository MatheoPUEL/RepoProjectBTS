const pi = 3.1415926535;
var radius = prompt('Rayon du cercle: ')
var area = Math.round(pi * carre(radius) * 100)/100
var circumference = Math.round(2 * pi * radius * 100)/100

document.getElementById('radius').innerHTML = "Rayon: " + radius
document.getElementById('area').innerHTML = "Surface: " + area
document.getElementById('circumference').innerHTML = "Circonférence: " + circumference

function carre (num) {
    return num * num
}