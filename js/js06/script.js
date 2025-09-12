var num1 = prompt('Saisissez un premier nombre');
var num2 = prompt('Saisissez un second nombre');
var num3 = prompt('Saisissez un troisième nombre');

var result = BiggerNum(num1, num2, num3)

document.getElementById('result').innerHTML = result

function BiggerNum(num1, num2, num3) {
    if (num1 > num2 && num1 > num3){
        return result = num1 + " est le plus grand chiffre"
    } else if (num2 > num1 && num2 > num3) {
        return result = num2 + " est le plus grand chiffre"
    } else if (num3 > num1 && num3 > num2) {
        return result = num3 + " est le plus grand chiffre"
    }
}