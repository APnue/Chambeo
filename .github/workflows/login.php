<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión</title>
</head>
<body>
    <h2>Inicio de Sesión</h2>
    <form action="login2.php" method="post">
        <label for="nombre">Nombre de usuario:</label><br>
        <input type="text" id="nombre" name="nombre"><br>
        <label for="correo">Correo de usuario:</label><br>
        <input type="text" id="correo" name="correo"><br><br>
        <label for="contrasena">Contraseña:</label><br>
        <input type="password" id="contrasena" name="contrasena"><br><br>
        <label for="confirmar_contrasena">Confirmar contraseña:</label><br>
        <input type="password" id="confirmar_contrasena" name="confirmar_contrasena"><br><br>
        <input type="submit" value="Login">
    </form>
    <p>No tienes una cuenta? <a href="register.php">Registrarse</a></p>
</body>
</html>
