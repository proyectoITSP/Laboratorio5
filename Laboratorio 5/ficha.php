<?php
$nombre = $_GET['nombre'];
$localidad = $_GET['localidad'];
$direccion = $_GET['direccion'];
$telefono = $_GET['telefono'];
$email = $_GET['email'];
include('funcinoes.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="main.css">
    <title>Ficha del estudiante</title>
</head>

<body>
    <div class="encabezado3">

        <a class="cambiar_datos" href="index-loged.php">Editar datos</a>

        <div class="logo3"></div>

        <form action="verificar.php" method="get">
            <input type="hidden" name="cerrar_sesion" value="true">
            <button class="boton2" type="submit">Cerrar sesión</button>
        </form>
    </div>

    <h1 class="nombre nombre2"> 
    <?php
    session_start();
    if (isset($_SESSION['usuario'])) {
        echo "Profesor: " . $_SESSION['usuario'] . "";
    } else {
        header("Location: login.php");
    }
    ?>
    </h1>
    <section class="container container2">
        <h1 class="TitulosFicha">Ficha alumno</h1>
        <div class="DatosFicha">
        <?php 
        echo "Nombre: $nombre <br>";
        echo "Localidad: $localidad <br>";
        echo "Dirección: $direccion <br>";
        echo "Teléfono: $telefono <br>";
        echo "Mail: $email <br>";
        echo "Cédula: <br>";
        cedula($cedula); 
        ?>
        </div>
        <h2 class="TitulosFicha">Promedio Final</h2>
        <div class="DatosFicha">
        <?php 
        promedio($n1, $n2, $n3, $n4, $n5, $n6, $n7, $n8, $n9, $n10, $n11, $n12, $n13);
        ?>
         </div>
    </section>
</body>

</html>