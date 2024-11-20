function f1() {
    let wynik = 0;

    let masaz = document.getElementById('masaz');
    let makijaz = document.getElementById('makijaz');

    const suma = document.getElementById('wynik');

    
    if (document.getElementById('peeling').checked) {
        wynik += 45;
    }

    if (document.getElementById('maska').checked) {
        wynik += 30;
    }
    
    if (masaz.checked) {
        wynik += 20;
    }

    if (makijaz.checked) {
        wynik += 50;
    }

    suma.innerHTML = "Cena zabiegów: " + wynik;
}

