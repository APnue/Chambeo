const chatBox = document.getElementById('chat-box');
const form = document.getElementById('message-form');

// Función para obtener los mensajes
function loadMessages() {
    fetch('chat.php?getMessages=true')
        .then(response => response.json())
        .then(data => {
            chatBox.innerHTML = ''; // Limpiar el chat actual
            data.forEach(msg => {
                const messageElem = document.createElement('div');
                const time = new Date(msg.timestamp).toLocaleTimeString(); // Formato de hora
                messageElem.innerHTML = `${time} ${msg.message} <span style="float:right;">${msg.username}</span>`;
                chatBox.appendChild(messageElem);
            });
            chatBox.scrollTop = chatBox.scrollHeight; // Desplazar hacia abajo
        });
}

// Función para enviar el mensaje
form.addEventListener('submit', function (e) {
    e.preventDefault();
    const username = document.getElementById('username').value;
    const message = document.getElementById('message').value;

    fetch('chat.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: `username=${encodeURIComponent(username)}&message=${encodeURIComponent(message)}`
    })
    .then(response => response.text())
    .then(data => {
        document.getElementById('message').value = '';  // Limpiar el campo de mensaje
        loadMessages();  // Actualizar mensajes
    });
});

// Cargar mensajes cada 2 segundos
setInterval(loadMessages, 2000);
