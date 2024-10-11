<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Videollamada</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #2A4A6B;
            color: white;
            font-family: Arial, sans-serif;
        }
        h1 {
            margin-bottom: 20px;
        }
        .button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #fff;
            color: #2A4A6B;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .button:hover {
            background-color: #ddd;
        }
    </style>
</head>
<body>

    <h1>Bienvenido a la Videollamada</h1>
    <button class="button" onclick="startCall()">Iniciar Videollamada</button>

    <script>
        function startCall() {
            const roomName = 'room-' + Math.random().toString(36).substr(2, 9); // Genera un nombre de sala aleatorio
            window.location.href = `https://meet.jit.si/${roomName}`; // Redirige a Jitsi Meet
        }
    </script>

</body>
</html>