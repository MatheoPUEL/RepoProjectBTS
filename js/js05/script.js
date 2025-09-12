var num = prompt('Saisissez un nombre');

var result = NumParite(num)

document.getElementById('result').innerHTML = result

function NumParite(num) {
    if (num % 2 == 0) {
        return result = num + " est un nombre pair"
    } else {
        return result = num + " est un nombre impair"
    }
}