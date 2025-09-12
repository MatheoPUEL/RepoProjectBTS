var temp = prompt("Saississez la température")

if (temp < 0) {
    indicator(temp, "Solide")
} else if (temp >= 0 && temp < 100) {
    indicator(temp, "Liquide")
} else {
    indicator(temp, "Gazeux")
}

function indicator(temp, state) {
    document.write("Température: " + temp + "<br>")
    document.write("Etat: " + state)
}