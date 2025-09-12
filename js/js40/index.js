calc()


function calc() {
    var w = window.innerWidth
    var h = window.innerHeight
    show(w,h)
}

function show(w, h) {
    document.getElementById("size").innerHTML = "Dimensions : " + w + " x " + h
}

window.addEventListener('resize', calc)