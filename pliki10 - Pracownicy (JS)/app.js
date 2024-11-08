const firstQuote = document.getElementById('q1');
const secondQuote = document.getElementById('q2');
const thirdQuote = document.getElementById('q3');

function f1() {
    firstQuote.style.display = 'none';
    secondQuote.style.display = 'block';
}

function f2() {
    secondQuote.style.display = 'none';
    thirdQuote.style.display = 'block';
}

function f3() {
    thirdQuote.style.display = 'none';
    firstQuote.style.display = 'block';
}

