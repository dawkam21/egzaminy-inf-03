const customerDiv = document.querySelector('.customer');
const adressDiv = document.querySelector('.adress');
const contactDiv = document.querySelector('.contact');

const firstName = document.getElementById('name');
const lastName = document.getElementById('lastName');
const tel = document.getElementById('tel');
const date = document.getElementById('date');
const street = document.getElementById('street');
const number = document.getElementById('number');
const city = document.getElementById('city');
const rodo = document.getElementById('rodo');

let progressBarWitdh = 4;
let emptyDiv = document.querySelector('.empty');

function customer() {
    const customerBtn = document.getElementById('customer');

    customerDiv.style.display = "block";
    adressDiv.style.display = "none";
    contactDiv.style.display = "none";
}

function adress() {
    const adressBtn = document.getElementById('adress');

    customerDiv.style.display = "none";
    adressDiv.style.display = "block";
    contactDiv.style.display = "none";
}

function contact() {
    const contactBtn = document.getElementById('contact');

    customerDiv.style.display = "none";
    adressDiv.style.display = "none";
    contactDiv.style.display = "block";
}

function submit() {
    if (rodo.checked) {
        rodo.value = "on";
        console.log(firstName.value + ", " + lastName.value + ", " + date.value + ", " + street.value + ", " + number.value + ", " + city.value + ", " + tel.value + ", " + rodo.value);
    } else {
        rodo.value = "off";
        console.log(firstName.value + ", " + lastName.value + ", " + date.value + ", " + street.value + ", " + number.value + ", " + city.value + ", " + tel.value + ", " + rodo.value);
    }
}

function progress() {
    progressBarWitdh += 12;

    if (progressBarWitdh > 100) {
        progressBarWitdh = 100;
    }

    emptyDiv.style.width = progressBarWitdh + "%";
}
