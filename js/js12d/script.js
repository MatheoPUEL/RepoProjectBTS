
function table() {
    var num = document.getElementById('number').value;
    var result = "";
    for (var i = 1; i <= 10; i++) {
        result += num + ' x ' + i + ' = '+ num * i + '<br>'
        document.getElementById('ici').innerHTML = result;
    }
}