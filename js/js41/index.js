function getDate() {

    const date = new Date();

    if (date.getSeconds() < 10) {
        var secondes = "0" + date.getSeconds() 
    } else {
        var secondes = date.getSeconds()
    }

    if (date.getMinutes() < 10) {
        var minutes = "0" + date.getMinutes() 
    } else {
        var minutes = date.getMinutes()
    }

    if (date.getHours() < 10) {
        var heures = "0" + date.getHours() 
    } else {
        var heures = date.getHours()
    }


    var fulldate = date.getDate() + " / " + (date.getMonth() + 1) + " / " + date.getFullYear()
    var heure = heures + " : " + minutes + " : " + secondes

    document.getElementById('heure').innerHTML = heure
    document.getElementById('date').innerHTML = fulldate
}

setInterval(getDate, 1000)