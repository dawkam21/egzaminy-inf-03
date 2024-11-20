function promo() {
    let options = document.getElementsByTagName('input');
    let cena = 0;
    const promocja = document.getElementById('promocja');
    
    if (options[0].checked) {
        cena = 25;
    } else if (options[1].checked) {
        cena = 30;
    } else if (options[2].checked) {
        cena = 40;
    } else if (options[3].checked) {
        cena = 50;
    }
    
    if (cena != 0) {
        promocja.innerHTML = 'Cena promocyjna: ' + (cena - 10);
    }

}