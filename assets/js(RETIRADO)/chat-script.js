document.addEventListener("DOMContentLoaded", function() {
    displayInitialMessage();
});

function displayInitialMessage() {
    const chatLog = document.getElementById('chat-log');
    const message = document.createElement('div');
    message.className = 'chat-message';
    message.textContent = "Bem-vindo ao Chat do Projeto PI! Pergunte sobre Mario, Henrique, Inacio ou Pedro.";
    chatLog.appendChild(message);
}

function sendChat() {
    const input = document.getElementById('chat-input').value.trim();
    const chatLog = document.getElementById('chat-log');
    let response = generateResponse(input.toLowerCase());
    const message = document.createElement('div');
    message.className = 'chat-message';
    message.textContent = response;
    chatLog.appendChild(message);
    document.getElementById('chat-input').value = '';
    chatLog.scrollTop = chatLog.scrollHeight;
}

function generateResponse(input) {
    if (input.includes("mário") || input.includes("mario")) {
        return "Mario gosta de doces, adora programação, É de boa, Gosta de Armários.";
    } else if (input.includes("henrique")) {
        return "Henrique é um grande fã de futebol e basquete, torcedor fanático do gigantesco da colina.";
    } else if (input.includes("inácio") || input.includes("inacio")) {
        return "Inacio gosta de programação, ouve rap de anime, joga com amigos e adora fofocas.";
    } else if (input.includes("pedro")) {
        return "Pedro come bem, usa muito o Instagram durante a aula e gosta muito do grupo de PI, vai no show do livinho.";
    } else {
        return "Não conheço esss nome. Tente novamente escrevendo o nome de algum membro (Mario, Henrique, Inacio, Pedro).";
    }
}






