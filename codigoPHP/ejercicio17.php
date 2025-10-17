<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 17</title>
    </head>

    <body>
        <?php
        /*  @author Cristian Mateos Vega
         *  @since 17/10/2025
         */
        $teatro = [];

        for ($indiceFilas = 0; $indiceFilas < 20; $indiceFilas++) {
            for ($indiceColumnas = 0; $indiceColumnas < 15; $indiceColumnas++) {
                $teatro[$indiceFilas][$indiceColumnas] = null;
            }
        }
        $teatro[6][2] = "juan";
        $teatro[11][6] = "pedro";
        $teatro[12][1] = "pepe";
        $teatro[11][7] = "maria";
        $teatro[0][8] = "javier";

        
        // FOR
        echo "<b>RECORRIDO CON FOR</b><br>";
        for ($indiceFilas = 0; $indiceFilas < 20; $indiceFilas++) {
            echo "en la fila " . $indiceFilas + 1 . " están ocupados los asientos: ";
            for ($indiceColumnas = 0; $indiceColumnas < 15; $indiceColumnas++) {
                if ($teatro[$indiceFilas][$indiceColumnas] != null) {
                    echo "'" . $indiceColumnas + 1 . " por " . $teatro[$indiceFilas][$indiceColumnas] . "'" . " ";
                }
            }
            echo '<br>';
        }

        
        // WHILE
        echo "<br>";
        echo "<b>RECORRIDO CON WHILE</b><br>";
        $indiceFilas = 0;
        while ($indiceFilas < 20) {
            echo "en la fila " . ($indiceFilas + 1) . " están ocupados los asientos: ";

            $indiceColumnas = 0;
            while ($indiceColumnas < 15) {
                if ($teatro[$indiceFilas][$indiceColumnas] != null) {
                    echo "'" . ($indiceColumnas + 1) . " por " . $teatro[$indiceFilas][$indiceColumnas] . "'" . " ";
                }
                $indiceColumnas++;
            }

            echo "<br>";
            $indiceFilas++;
        }

        
        // FOREACH
        echo "<br>";
        echo "<b>RECORRIDO CON FOREACH</b><br>";
        foreach ($teatro as $indiceFilas => $fila) {
            echo "en la fila " . ($indiceFilas + 1) . " están ocupados los asientos: ";

            foreach ($fila as $indiceColumnas => $valor) {
                if ($valor !== null) {
                    echo "'" . ($indiceColumnas + 1) . " por " . $valor . "'" . " ";
                }
            }

            echo "<br>";
        }
        ?>
    </body>

</html>

