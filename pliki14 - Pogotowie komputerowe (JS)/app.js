function f1() {
    const name = document.getElementById('name');
    const lastName = document.getElementById('lastName');
    const email = document.getElementById('email');
    const service = document.getElementById('service');
    const res = document.getElementById('res');
    
    res.innerHTML = name.value + ' ' + lastName.value + '<br>' + email.value.toLowerCase() + '<br>' + "Usługa: " + service.value;
}