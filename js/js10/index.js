var a = 1    
var b = 1
var c = -2

if (a != 0) {
    delta = (b*b) - (4 * a * c)
    if(delta > 0) {
        x1 = (-b + Math.sqrt(delta)) / 2 * a
        x2 = (-b - Math.sqrt(delta)) / 2 * a 
        show()
    } 
    if (delta == 0) {
        x1 = -b / (2*a)
    }
    if (delta < 0) {
        show()
    }

} else {
    
}

function show() {
    try {
        document.write("x1 = " + x1 + "<br>")
        document.write("x2 = " + x2)
    } catch {
        document.write("Pas de sollution possible");
    }

}