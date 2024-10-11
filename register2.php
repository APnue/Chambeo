<?php
$host = "localhost";
$nombre_usuario = "root";
$contrasena = "";
$db_name = "base";
$tbl_name = "usuarios";

$conn = new mysqli($host, $nombre_usuario, $contrasena, $db_name);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];
$confirmar_contrasena = $_POST['confirmar_contrasena'];

$stmt = $conn->prepare("INSERT INTO usuarios (nombre, correo, contrasena) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $nombre, $correo, $contrasena);

if ($stmt->execute()) {
    echo "<script>alert('Registro exitoso. Puedes iniciar sesión.'); window.location.href='login.php';</script>";
} else {
    echo "<script>alert('Error al registrar: " . $stmt->error . "'); window.history.back();</script>";
}


$stmt->close();
$conn->close();
?>