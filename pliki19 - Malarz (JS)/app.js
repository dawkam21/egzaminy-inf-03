function f1() {
    const area = document.getElementById('area');
    const result = document.getElementById('result');
    let cans = 0;

    cans = Math.ceil(Number(area.value / 4));
    

    result.innerHTML = "Liczba potrzebnych puszek: " + cans;
}