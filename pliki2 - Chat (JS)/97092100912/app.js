let message = document.getElementById('message');
let chat = document.querySelector('.chat');
let jola = document.querySelector('.jola');
let krzys = document.querySelector('.krzys');

let krzysArray = ["Świetnie!", "Kto gra główną rolę?", "Lubisz filmy Tego reżysera?", "Będę 10 minut wcześniej", "Może kupimy sobie popcorn?", "Ja wolę Colę", 
"Zaproszę jeszcze Grześka", "Tydzień temu też byłem w kinie na Diunie", "Ja funduję bilety"];


function f1() {
    const jolaMessage = document.createElement('div');
    jolaMessage.classList.add('jola');
    
    const messageJola = document.createElement('p');
    messageJola.innerHTML = message.value;
    
    let jolaImage = document.createElement('img');
    jolaImage.src = 'Jolka.jpg';
    jolaImage.classList.add('jolaImg');
    
    jolaMessage.appendChild(jolaImage);
    jolaMessage.appendChild(messageJola);
    chat.appendChild(jolaMessage);
    jolaMessage.scrollIntoView();
}

function f2() {
    const krzysMessage = document.createElement('div');
    krzysMessage.classList.add('krzys');
    
    const randomIndex = Math.floor(Math.random() * 9);
    const krzysAnswer = krzysArray[randomIndex];

    const messageKrzys = document.createElement('p');
    messageKrzys.innerHTML = krzysAnswer;

    let krzysImage = document.createElement('img');
    krzysImage.src = "Krzysiek.jpg";
    krzysImage.classList.add('krzysImg');

    krzysMessage.appendChild(krzysImage);
    krzysMessage.appendChild(messageKrzys);
    chat.appendChild(krzysMessage);
    krzysMessage.scrollIntoView();
}