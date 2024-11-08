const colors = document.getElementById('clrs');
const nonColors = document.getElementById('nonClrs');
const orange = document.getElementById('orange');

function f1() {
    const blur = document.getElementById('Blur');
    const sepia = document.getElementById('Sepia');
    const negative = document.getElementById('Negatyw');
    const bee = document.getElementById('bee');
    
    if (blur.checked) {
        bee.style.filter = "blur(5px)";
    } else if (sepia.checked) {
        bee.style.filter = "sepia(100%)";
    } else if (negative.checked) {
        bee.style.filter = "invert(100%)";
    }
}

function f2() {
    orange.style.filter = "grayscale(0%)";
}

function f3() {
    orange.style.filter = "grayscale(100%)";
}

function f4() {
    const fruits = document.getElementById('fruits');
    const progress = document.getElementById('progress');
    const opacityValue = progress.value;
    
    fruits.style.filter = `opacity(${opacityValue}%)`;
}

function f5() {
    const turtle = document.getElementById('turtle');
    const progress2 = document.getElementById('progress2');
    const brightnessValue = progress2.value;

    turtle.style.filter = `brightness(${brightnessValue}%)`;
}