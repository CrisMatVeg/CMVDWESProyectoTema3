<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 18</title>
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

        array_walk($teatro, function ($vvFila, $ccIndiceFilas) {
            echo "en la fila " . ($ccIndiceFilas + 1) . " están ocupados los asientos: ";
            array_walk($vvFila, function ($vvValor, $ccIndiceColumnas) {
                if ($vvValor !== null) {
                    echo "'" . ($ccIndiceColumnas + 1) . " por " . $vvValor . "'" . " ";
                }
            });
            echo "<br>";
        });
        ?>
    </body>

</html>

