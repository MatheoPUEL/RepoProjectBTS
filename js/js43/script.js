function getAcronyme() {
    var input = document.getElementById('acro').value;
    document.getElementById("result").innerHTML = "";

    var parsed = input.split(' ')
    
    parsed.forEach((element) => {
        console.log(Array.from(element)[0])
        var w = document.getElementById("result");
        w = document.getElementById("result").innerHTML += Array.from(element)[0].toUpperCase() + ".";
    });
}