
function indicator(temp, state) {
    document.getElementById("tempResult").innerHTML = "Température: " + temp
    document.getElementById("State").innerHTML = "Etat: " + state
}

function get() {
    var temp = parseInt(document.getElementById("temp").value);
    if (temp < 0) {
        indicator(temp, "Solide")
    } else if (temp >= 0 && temp < 100) {
        indicator(temp, "Liquide")
    } else {
        indicator(temp, "Gazeux")
    }
}

function minus() {
    var temp = document.getElementById("temp").value;
    ntemp = temp - 10
    document.getElementById("temp").value = ntemp;
    get()
}
function plus() {
    var temp = document.getElementById("temp").value;
    ntemp = parseInt(temp) + 10
    document.getElementById("temp").value = ntemp;
    get()
}