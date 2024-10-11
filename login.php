<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <script type="text/javascript" src="validacion.js"></script>
</head>
<body>
    <form action="login2.php" method="post">
        <h2>Iniciar Sesión:</h2>
        <label for="nombre">Nombre de usuario:</label><br>
        <input type="text" id="nombre" name="nombre" placeholder="Ingrese un nombre de usuario" required><br><br>
        <label for="contrasena">Contraseña:</label><br>
        <input type="password" id="contrasena" name="contrasena"  placeholder="Ingrese una contraseña" required><br><br>
        <input type="submit" value="Registrar">
            <p>¿No tienes una cuenta? <a href="register.php">Registrarse</a></p>
    </form>
</body>
</html>