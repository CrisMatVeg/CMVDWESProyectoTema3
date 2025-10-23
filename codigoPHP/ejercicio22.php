<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 22</title>
        <style>
            input:required{
                background-color: lightyellow;
            }
            input:disabled{
                background-color: lightgrey;
            }
        </style>
    </head>
    <body>

        <?php
        /*  @author Cristian Mateos Vega
         *  @since 20/10/2025
         */
        if (isset($_REQUEST['enviar'])) {
            echo ("<br>");
            $nombre = isset($_REQUEST['nombre']) ? htmlspecialchars($_REQUEST['nombre']) : '';
            $edad = isset($_REQUEST['edad']) ? (int) $_REQUEST['edad'] : '';
            $altura = isset($_REQUEST['altura']) ? (float) $_REQUEST['altura'] : '';
            $programar = isset($_REQUEST['programar']) ? htmlspecialchars($_REQUEST['programar']) : '';
            echo ("Nombre introducido: " . $nombre . "<br>");
            echo ("Edad introducida: " . $edad . "<br>");
            echo ("Altura introducida: " . $altura . "<br>");
            echo ("Respuesta a Te gusta programar?: " . ($programar == 0 ? "No" : "Si") . "<br>");
        } else {
        ?>
            <h2>Formulario de Tipos Básicos</h2>
            <form action="" method="post">
                <!-- String -->
                <label for="nombre">Nombre:</label><br>
                <input type="text" id="nombre" name="nombre"><br><br>

                <!-- Int -->
                <label for="edad">Edad (entero):</label><br>
                <input type="number" id="edad" name="edad"><br><br>

                <!-- Float -->
                <label for="altura">Altura (decimal):</label><br>
                <input type="float" id="altura" name="altura"><br><br>

                <!-- Boolean -->
                <label>¿Te gusta programar?</label><br>
                <input type="radio" id="si" name="programar" value="1">
                <label for="si">Sí</label><br>
                <input type="radio" id="no" name="programar" value="0">
                <label for="no">No</label><br><br>

                <input type="submit" value="Enviar" name="enviar">
            </form>
        <?php
        }
        ?>
    </body>
</html>
