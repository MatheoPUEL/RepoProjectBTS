let compteur = 0;
let somme_note = 0;
let LastMinNote = 0; 
let LastMaxNote = 0;
function AddNote() {
    var note = prompt('Entrez votre note');
    let count = AddTotal();
    let somme_note = SommeNote(note)
    
    if (count == 1 ) {
        LastMinNote = note;
        LastMaxNote = note;
    }

    if (LastMinNote > note) {
        LastMinNote = note
    }

    if (LastMaxNote < note) {
        LastMaxNote = note
    }

    let moyenne = somme_note / count

    Update(count, moyenne, LastMinNote, LastMaxNote)

}


function SommeNote(note) {
    somme_note = parseFloat(somme_note) + parseFloat(note)
    return somme_note;
}

function AddTotal() {
    compteur++;

    return compteur;
}

function Update(count, moyenne, LastMinNote) {
    document.getElementById('total').innerHTML = "Nombre: " + count
    document.getElementById('avg').innerHTML = "Moyenne: " + moyenne.toFixed(2)
    document.getElementById('min').innerHTML = "Note la plus basse: " + LastMinNote
    document.getElementById('max').innerHTML = "Note la plus haute: " + LastMaxNote
}