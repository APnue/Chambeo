<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <script type="text/javascript" src="validacion.js"></script>
</head>
<body>

    <?php

    session_start();
    $host = "localhost";
    $nombre_usuario = "root";
    $contrasena = "";
    $db_name = "base";
    $tbl_name = "usuarios";

    $conexion = new mysqli($host, $nombre_usuario, $contrasena, $db_name);

    $nombre=$_POST['nombre'];
    $contrasena=$_POST['contrasena'];
            $consulta="SELECT nombre, contrasena FROM usuarios WHERE nombre='$nombre' AND contrasena='$contrasena'";
            $resultados=mysqli_query($conexion, $consulta);

            if (mysqli_num_rows($resultados) === 1){

                $row =mysqli_fetch_assoc($resultados);
                if ($row['nombre']===$nombre && $row['contrasena']===$contrasena){

                    $_SESSION['nombre']=$row['nombre'];
                    header("Location: index.html");
                    exit();
                }else {

                    header("Location: PaginaNoTerminada.html");
                    exit();
                }

            }else {
                header("Location: PaginaNoTerminada.html");
                    exit();
            }
?>  

</body>
</html>