<?php
  
  $conection = mysqli_connect("localhost", "root", "", "php_login") or die ("Problemas en la coneccion");

  mysqli_query($conection, "INSERT INTO comunidades(comunidad, descripcion) VALUES('$_REQUEST[nombre]','$_REQUEST[descripcion]')") or die("Problemas en el insert".mysqli_error($conection));


   mysqli_close($conection);


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Confirmacion</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h2>La comunidad fue creada</h2>

</body>
</html>