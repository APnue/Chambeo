<?php

$conn = new mysqli("localhost", "root", "", "chat_db");

if ($conn->connect_error) {
    die('Error de conexión: ' . $conn->connect_error);
}

if (isset($_GET['getMessages'])) {
    $sql = "SELECT username, message, timestamp FROM messages ORDER BY id DESC";
    $result = $conn->query($sql);
    $messages = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $messages[] = $row;
        }
    }
    echo json_encode($messages);
    exit();
}

if (isset($_POST['username']) && isset($_POST['message'])) {
    $username = $conn->real_escape_string($_POST['username']);
    $message = $conn->real_escape_string($_POST['message']);
    $sql = "INSERT INTO messages (username, message) VALUES ('$username', '$message')";
    if ($conn->query($sql) === TRUE) {
        echo 'Mensaje enviado';
    } else {
        echo 'Error: ' . $conn->error;
    }
    exit();
}

$conn->close();
?>