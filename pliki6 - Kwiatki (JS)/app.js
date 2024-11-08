const firstCard = document.querySelector('.formBlock1');
const secondCard = document.querySelector('.formBlock2');
const thirdCard = document.querySelector('.formBlock3');
let name = document.getElementById('name');
let lastName = document.getElementById('lastName');

function nextCard() {
    firstCard.style.visibility = "hidden";
    secondCard.style.visibility = "visible";
}

function nextCard2() {
    firstCard.style.visibility = "hidden";
    secondCard.style.visibility = "hidden";
    thirdCard.style.visibility = "visible";
}

function passwords() {
    let pass = document.getElementById('pass').value;
    let confPass = document.getElementById('confirmPass').value;
    if (pass !== confPass) {
        alert("Podane hasła różnią się");
    } else {
        console.log("Witaj " + name.value + " " + lastName.value);
    }
}