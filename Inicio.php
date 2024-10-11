<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apock web design</title>
    <link rel="stylesheet" type="text/css" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body>

<style type="text/css">
html {
    -webkit-text-size-adjust: 100%;
    -ms-text-size-adjust: 100;
    text-size-adjust: 100%;
    line-height: 1.4;
}


* {
    margin: 0;
    padding: 0;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

body {
    color: #404040;
    font-family: "Arial", Segoe UI, Tahoma, sans-serifl, Helvetica Neue, Helvetica;
}

/*=====================================
estilos de la utilidad
Copiar esto
=====================================*/

.perfil-usuario .sombra {
    position: absolute;
    display: block;
    width: 100%;
    height: 50%;
    bottom: 0;
    left: 0;
}
.perfil-usuario .portada-perfil,
.perfil-usuario .sombra {
    border-radius: 0 0 20px 20px;
}
.perfil-usuario img {
    width: 100%;
}
.contenedor-perfil {
    max-width: 1024px;
    margin-left: auto;
    margin-right: auto;
}
.perfil-usuario .contenedor-perfil {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 90%;
}
.perfil-usuario .portada-perfil {
    display: block;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    position: relative;
    height: 20rem;
    margin-bottom: .5rem;
}
.perfil-usuario .avatar-perfil {
    display: block;
    width: 230px;
    height: 230px;
    background-color: #D9DCF1;
    position: absolute;
    bottom: -65px;
    left: 4rem;
    border-radius: 50%;
    overflow: hidden;
    border: 8px solid #FFFFFF;
    box-shadow: 0 0 12px 2px rgba(0, 0, 0, .2);
}
.perfil-usuario .cambiar-foto {
    position: absolute;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    background-color: rgba(0, 0, 0, .5);
    height: 57%;
    bottom: 0;
    left: 0;
    color: #fff;
    text-decoration: none;
    transform: translateY(50%);
    opacity: 0;
    transition: all ease-in 200ms;
}
.perfil-usuario .cambiar-foto i {
    margin-bottom: .5rem;
    font-size: 2rem;
}
.perfil-usuario .avatar-perfil:hover .cambiar-foto {
    transform: translateY(0);
    opacity: 1;
}
.perfil-usuario .datos-perfil {
    position: absolute;
    display: block;
    width: calc(100% - 230px - 8rem);
    right: 0;
    bottom: 0;
    color: #fff;
    text-shadow: 0 0 5px rgba(0, 0, 0, .2);
    padding-bottom: 1rem;
    padding-right: 1rem;
}
.perfil-usuario .titulo-usuario {
    font-size: 2.3rem;
    white-space: nowrap;
    margin-bottom: .5rem;
    overflow: hidden;
    text-overflow: ellipsis;
}
.perfil-usuario .bio-usuario {
    font-size: 1em;
    margin-bottom: .75rem;
}
.perfil-usuario .lista-perfil {
    list-style: none;
}
.perfil-usuario .lista-perfil li {
    display: inline-block;
    font-size: 1em;
    margin-right: 1rem;
}

.perfil-usuario .opcciones-perfil {
    display: block;
    position: absolute;
    right: 2rem;
    top: 1rem;
}
.perfil-usuario .opcciones-perfil button {
    border: 0;
    padding: 8px 20px;
    border-radius: 8px;
    background-color: rgba(0, 0, 0, .5);
    color: #fff;
    cursor: pointer;
}
.perfil-usuario .menu-perfil ul {
    display: flex;
    list-style: none;
    margin-left: calc(200px + 8rem);
    width: calc(100% - 200px - 8rem);
}
.perfil-usuario .menu-perfil ul li {
    margin-right: 1rem;
}
.perfil-usuario .menu-perfil a {
    display: block;
    text-decoration: none;
    color: inherit;
    padding: 8px 20px;
    font-weight: bold;
    border-radius: 8px;
    transition: all ease-in 100ms;
}
.perfil-usuario .menu-perfil a:hover {
    background-color: #4CB0C6;
    color: #fff;
}
.perfil-usuario .icono-perfil {
    display: none;
    margin-right: .75rem;
}
@media (max-width: 780px) {
    .perfil-usuario .contenedor-perfil {
        width: 100%;
    }
    .perfil-usuario .avatar-perfil {
        left: calc(50% - 115px)
    }
    .perfil-usuario .datos-perfil {
        bottom: 200px;
        left: 0;
        width: 100%;
        padding: 15px;
        text-align: center;
    }
    .perfil-usuario .bio-usuario {
        font-size: 1em;
        overflow:hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }
    .perfil-usuario .titulo-usuario {
        font-size: 2.1rem;
    }
    .perfil-usuario .portada-perfil {
        height: 28rem;
    }
    .perfil-usuario .menu-perfil ul {
        flex-direction: column;
    }
    .perfil-usuario .lista-perfil {
        display: block;
    }
    .perfil-usuario .menu-perfil {
        margin-top: 2rem;
    }
    .perfil-usuario .menu-perfil ul {
        display: flex;
        list-style: none;
        margin-left: auto;
        margin-right: auto;
        padding-top: 2.5rem;
        width: 70%;
        background-color: #fff;
        border-radius: 12px;
        box-shadow: 0 0 12px 2px rgba(0, 0, 0, .1);
    }
    .perfil-usuario .icono-perfil {
        display: inline-block;
    }
}
input[type="text"] {
	margin: 10px;
  background-color: transparent;
  border: none;
  padding: 10px;
  font-size: 16px;
  color: white; /* Color del texto */
  width: 100%; /* Ancho del input */
  box-sizing: border-box; /* Para que el ancho incluya el padding */
}

input[type="text"]::placeholder {
  color: #aaa; /* Color del placeholder */
}
</style>


<!-- Script para manejar el cambio de la portada -->
<script>
    document.querySelector('.opcciones-perfil button').addEventListener('click', function() {
        document.getElementById('inputPortada').click(); // Desencadena el input file cuando el botón se presiona
    });

    document.getElementById('inputPortada').addEventListener('change', function(event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                document.querySelector('.portada-perfil').style.backgroundImage = `url("${e.target.result}")`;
            };
            reader.readAsDataURL(file); // Convierte la imagen en una URL y la aplica
        }
    });
</script>
<section class="perfil-usuario">
    <div class="contenedor-perfil">
        <div class="portada-perfil" style="background-image: url('fondo_login.jpg');">
            <div class="sombra"></div>
            <div class="avatar-perfil">
                <img src="" alt="img" id="imagen-perfil">
                <a href="#" class="cambiar-foto">
                    <i class="fas fa-camera"></i> 
                    <span>Cambiar foto</span>
                </a>
                <input type="file" id="input-foto" accept="image/*" style="display: none;">
            </div>
            <div class="datos-perfil">
                <h4 class="titulo-usuario">Nombre de usuario</h4>
                <input type="text" placeholder="Agregar descripcion">
                <ul class="lista-perfil">
                    <li>35 Seguidores</li>
                    <li>7 Seguidos</li>
                    <li>32 Publicaciones</li>
                </ul>
            </div>
            <div class="opcciones-perfil">
                <button id="boton-subir-portada">Subir portada</button>
                <input type="file" id="inputPortada" accept="image/*" style="display: none;">
                <i class="fas fa-wrench"></i>
            </div>
        </div>
        <div class="menu-perfil">
            <ul>
                <li><a href="" title=""><i class="icono-perfil fas fa-bullhorn"></i> Videollamada</a></li>
                <li><a href="#" title=""><i class="icono-perfil fas fa-info-circle"></i> Informacion</a></li>
                <li><a href="#" title=""><i class="icono-perfil fas fa-grin"></i> Amigos 43</a></li>
                <li><a href="#" title=""><i class="icono-perfil fas fa-camera"></i> Fotos</a></li>
            </ul>
        </div>
    </div>
</section>

<script>
    // Funcionalidad para cambiar la portada
    document.getElementById('boton-subir-portada').addEventListener('click', function() {
        document.getElementById('inputPortada').click();
    });

    document.getElementById('inputPortada').addEventListener('change', function(event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                document.querySelector('.portada-perfil').style.backgroundImage = `url("${e.target.result}")`;
            };
            reader.readAsDataURL(file); // Convierte la imagen en una URL y la aplica
        }
    });

    // Funcionalidad para c ambiar la imagen de perfil
    document.querySelector('.cambiar-foto').addEventListener('click', function() {
        document.getElementById('input-foto').click();
    });

    document.getElementById('input-foto').addEventListener('change', function(event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('imagen-perfil').src = e.target.result;
            };
            reader.readAsDataURL(file); // Convierte la imagen en una URL y la aplica
        }
    });
</script>
<br><br><br><br><br>
<?php
include 'conectar.php';

// Mostrar registros existentes
$sql = "SELECT * FROM proyectos";
$result = $conn->query($sql);

echo "<section class='perfil-usuario'>";
echo "<div class='contenedor-perfil'>";
echo "<div class='portada-perfil' style='background-image: url(http://localhost/multimedia/relleno/fondo-9.png);'>";
echo "<div class='sombra'></div>";
echo "<div class='datos-perfil'>";
echo "<h2>Proyectos</h2>";

if ($result->num_rows > 0) {
    echo "<ul class='lista-perfil'>";
    while($row = $result->fetch_assoc()) {
        echo "<li>" . $row["titulo"] . " - " . $row["descripcion"] . "</li>";
    }
    echo "</ul>";
} else {
    echo "<p>No hay proyectos registrados.</p>";
}

echo "</div>"; // fin datos-perfil
echo "</div>"; // fin portada-perfil

// Formulario para ingresar nuevos registros
echo "<div class='menu-perfil'>";
echo "<h2>Ingresar nuevo proyecto</h2>";
echo "<form action='ingresar.php' method='post'>";
echo "<label for='titulo'>Título:</label>";
echo "<input type='text' id='titulo' name='titulo' class='input-texto'><br><br>";
echo "<label for='descripcion'>Descripción:</label>";
echo "<textarea id='descripcion' name='descripcion' class='textarea-texto' cols=50 rows=10></textarea><br><br>";
echo "<input type='submit' value='Enviar' class='btn-ingresar'>";
echo "</form>";
echo "</div>"; // fin menu-perfil
echo "</div>"; // fin contenedor-perfil
echo "</section>";
?>

        <div class="contenedor-flex">
            <!-- Lista de proyectos -->
            <div class="proyectos-lista">
                <h2>Proyectos</h2>
                <?php
                include 'conectar.php';

                // Verificar conexión
                if ($conn->connect_error) {
                    die("Error en la conexión: ". $conn->connect_error);
                }

                // Mostrar registros existentes
                $sql = "SELECT * FROM proyectos";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    echo "<ul class='lista-perfil'>";
                    while ($row = $result->fetch_assoc()) {
                        echo "<li class='proyecto-item'>". $row["titulo"]. " - ". $row["descripcion"];
                        echo "<form action='agregar_comunidad.php' method='POST'>";
                        echo "<input type='hidden' name='proyecto_id' value='". $row["id"]. "'>";
                        echo "<button type='submit'>Agregar a comunidad</button>";
                        echo "</form>";
                        echo "</li>";
                    }
                    echo "</ul>";
                } else {
                    echo "<p>No hay proyectos registrados.</p>";
                }
                ?>
            </div>

            <!-- Formulario para agregar nuevos proyectos -->
            <div class="formulario-proyecto">
                <h2>Ingresar nuevo proyecto</h2>
                <form action="ingresar.php" method="post">
                    <label for="titulo">Título:</label>
                    <input type="text" id="titulo" name="titulo" class="input-texto" required><br><br>
                    <label for="descripcion">Descripción:</label>
                    <textarea id="descripcion" name="descripcion" class="textarea-texto" cols="50" rows="10" required></textarea><br><br>
                    <input type="submit" value="Enviar" class="btn-ingresar">
                </form>
</body>

</html>
