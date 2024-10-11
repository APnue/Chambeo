<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuarios</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <script type="text/javascript" src="validacion.js"></script>
</head>
<body>
    <form action="register2.php" method="post" id="form">
        <h2>Registrar Usuario:</h2>
        <label for="nombre">Nombre de usuario:</label><br>
        <input type="text" id="nombre" name="nombre" placeholder="Ingrese un nombre de usuario" required><br><br>
        <label for="correo">Correo de usuario:</label><br>
        <input type="mail" id="correo" name="correo" placeholder="Ingrese su correo" required><br><br>
        <label for="contrasena">Contraseña:</label><br>
        <input type="password" id="contrasena" name="contrasena"  placeholder="Ingrese una contraseña" required><br><br>
        <label for="confirmar_contrasena">Confirmar contraseña:</label><br>
        <input type="password" id="confirmar_contrasena" name="confirmar_contrasena"  placeholder="Confirme su contraseña" required><br><br>
        <input type="submit" value="Registrar">
            <p>¿Ya tienes una cuenta? <a href="login.php">Iniciar sesión</a></p>
    </form>
</body>
</html>
