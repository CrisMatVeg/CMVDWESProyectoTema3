<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 21 Tratamiento</title>
    </head>

    <body>
        <?php
        /*  @author Cristian Mateos Vega
         *  @since 20/10/2025
         */
        $nombre = isset($_REQUEST['nombre']) ? htmlspecialchars($_REQUEST['nombre']) : 'No proporcionado';
        $edad = isset($_REQUEST['edad']) ? (int) $_REQUEST['edad'] : 0;
        $altura = isset($_REQUEST['altura']) ? (float) $_REQUEST['altura'] : 0.0;
        $programar = isset($_REQUEST['programar']) ? htmlspecialchars($_REQUEST['programar']) : 'No respondido';
        echo ("Nombre introducido: " . $nombre . "<br>");
        echo ("Edad introducida: " . $edad . "<br>");
        echo ("Altura introducida: " . $altura . "<br>");
        echo ("Respuesta a Te gusta programar?: " . $programar . "<br>");
        ?>
    </body>

</html>