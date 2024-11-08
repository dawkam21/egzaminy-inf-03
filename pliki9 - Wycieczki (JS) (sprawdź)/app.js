const midPic = document.getElementById('midPic');
const one = document.getElementById('1');
const two = document.getElementById('2');
const three = document.getElementById('3');
const four = document.getElementById('4');
const five = document.getElementById('5');
const six = document.getElementById('6');
const seven = document.getElementById('7');

function nextImg() {
    if (midPic.src == one.src) {
        midPic.src = two.src;
    } else if (midPic.src == two.src) {
        midPic.src = three.src;
    } else if (midPic.src == three.src) {
        midPic.src = four.src;
    } else if (midPic.src == four.src) {
        midPic.src = five.src;
    } else if (midPic.src == five.src) {
        midPic.src = six.src;
    } else if (midPic.src == six.src) {
        midPic.src = seven.src;
    } else if (midPic.src == seven.src) {
        midPic.src = one.src;
    }
}

function prvsImg() {
    if (midPic.src == one.src) {
        midPic.src = seven.src;
    } else if (midPic.src == two.src) {
        midPic.src = one.src;
    } else if (midPic.src == three.src) {
        midPic.src = two.src;
    } else if (midPic.src == four.src) {
        midPic.src = three.src;
    } else if (midPic.src == five.src) {
        midPic.src = four.src;
    } else if (midPic.src == six.src) {
        midPic.src = five.src;
    } else if (midPic.src == seven.src) {
        midPic.src = six.src;
    }
}