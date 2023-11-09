<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Dashboard</title>
    <!-- BOX ICONS -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="../css/estilos.css">
    <!-- CUSTOM JS -->
    <script src="../JS/app.js" defer></script>
</head>

<body>

<header>
    <div class="back">
        <div class="menu container">
            <a href="#" class="logo">
                <img src="../IMG/Logo3.png" id="upg" alt="">
            </a>
        </div>
    </div>
</header>


<div class="menu-dashboard">
    <!-- TOP MENU -->
    <div class="top-menu">
        <div class="toggle">
            <i class='bx bx-menu'></i>
        </div>
    </div>
    <div class="content">
        <nav class="d-flex">

            <button class="p-2" onclick="alternarFormulario()">Crear Carpeta</button>

            <div id="formulario" style="display: none;">
                <form action="../CLASES-CONEXION/crearCarpeta.php" method="post">
                    <label for="nombre_carpeta">Nombre de la carpeta:</label>
                    <input type="text" id="nombre_carpeta" name="carpeta" placeholder="Nombre de la carpeta" required>
                    <input type="submit" value="Crear">
                </form>
            </div>

            <script>
                function alternarFormulario() {
                    var formulario = document.getElementById("formulario");
                    if (formulario.style.display === "none") {
                        formulario.style.display = "block";
                    } else {
                        formulario.style.display = "none";
                    }
                }
            </script>
            <nav class="d-flex">

<button class="p-2" onclick="alternarFormulario2()">borrar Carpeta</button>

<div id="formulario2" style="display: none;">
    <form action="./CLASES-CONEXION/borrarCarpeta.php" method="post">
        <label for="nombre_carpeta">Nombre de la carpeta a borrar:</label>
        <input type="text" id="nombre_carpeta" name="carpeta" placeholder="Nombre de la carpeta" required>
        <input type="submit" value="Crear">
    </form>
</div>

<script>
    function alternarFormulario2() {
        var formulario = document.getElementById("formulario2");
        if (formulario.style.display === "none") {
            formulario.style.display = "block";
        } else {
            formulario.style.display = "none";
        }
    }
</script>
</nav>


<nav class="d-flex">

<button class="p-2" onclick="alternarFormulario3()">editar Carpeta</button>

<div id="formulario3" style="display: none;">
    <form action="../CLASES-CONEXION/editarCarpeta.php" method="post">
        <label for="nombre_carpeta">Nombre de la carpeta:</label>
        <input type="text"  name="carpeta" placeholder="Nombre de la carpeta" required>
        <input type="text"  name="nuevo" placeholder="nuevo nombre de la carpeta" required>
        <input type="submit" value="Crear">
    </form>
</div>

<script>
    function alternarFormulario3() {
        var formulario = document.getElementById("formulario3");
        if (formulario.style.display === "none") {
            formulario.style.display = "block";
        } else {
            formulario.style.display = "none";
        }
    }
</script>
   
</div>
</div>

<div class="container text-center justyfy-center">
            <!-- Este es el bucle para mostrar archivos y carpetas con enlaces -->
            <?php
            $rutaCarpeta = "../CARPETAS/";

            $archivos = scandir($rutaCarpeta);
            foreach ($archivos as $archivo) {
                if ($archivo != '.' && $archivo != '..') {
                    $rutaArchivo = $rutaCarpeta . $archivo;
                    // Comprobamos si es un directorio o un archivo
                    if (is_dir($rutaArchivo)) {
                        // Si es un directorio, mostramos un enlace para abrirlo
                        echo '<div style = "border:solid" class = "d-flex"><a class="nav-link" href="' . $rutaArchivo . '/">' . $archivo . '</a><br></div>';
                        
                    } else {
                        // Si es un archivo, mostramos un enlace para abrirlo
                        echo '<div class = "d-flex"><a class="nav-link" href="' . $rutaArchivo . '">' . $archivo . '</a><br></div>';
                    }
                }
            }
            ?>

        </div>

        <div class="container text-center">
            <button type="button" onclick="location.href='prueba.php'">Subir archivo</button>
        </div>

    </div>


</body>
</html>
