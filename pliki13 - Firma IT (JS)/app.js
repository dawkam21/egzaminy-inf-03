function sbmt() {
    const name = document.getElementById('name').value;
    const lastName = document.getElementById('lastName').value;
    const email = document.getElementById('email').value;
    const annouc = document.getElementById('annoucement').value;
    const checkbox = document.getElementById('check');
    let full = document.getElementById('full');

    if (!checkbox.checked) {
        full.style.color = 'red';
        full.innerText = 'Musisz zapoznać się z regulaminem';
    } else if (checkbox.checked) {
        full.style.color = 'navy';
        full.innerHTML = name.toUpperCase() + ' ' + lastName.toUpperCase() + '<br>' + 'Treść Twojej sprawy: ' + annouc;
    }
}